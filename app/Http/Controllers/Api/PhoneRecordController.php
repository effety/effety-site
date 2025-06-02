<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PhoneRecord;
use App\Models\Patient;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class PhoneRecordController extends Controller
{

    public function getCDRArray()
    {
        $lastRecord = PhoneRecord::latest()->first();
        if (!$lastRecord) {
            return response()->json([
                'success' => false,
                'message' => 'No records found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $lastRecord,
        ], 200);
    }
    
    public function CDR(Request $request)
    {
        $data = $request->all(); 
        $missingData = []; 
    
        foreach ($data as $record) {
            // Check if the record already exists in the PhoneRecord table
            $existingRecord = PhoneRecord::where('call_id', $record['uniqueid'])->first();
    
            if ($existingRecord) {
                continue; // Skip this record if it already exists
            }
    
            // Extract patient and member details
            $patient_id = $record['src'];
            $member_id = $record['dst'];
            $duration_seconds = (int) $record['billsec'];
            $call_duration = gmdate('H:i:s', $duration_seconds);

            if ($duration_seconds <= 60) {
                $bills = 0;
            } elseif ($duration_seconds > 60 && $duration_seconds <= 120) {
                $bills = 9;
            } else { // duration > 120
                $bills = 59;
            }

            $caller = Patient::where('extension_code', $patient_id)->first();
            if (!$caller) {
                $missingData[] = "Patient with extension_code $patient_id not found.";
                continue; // Skip processing this record if patient not found
            }
    
            $caller_wallet = Wallet::where('user_id', $caller->id)
                ->where('user_type', 'patient')
                ->where('currency_code', 'CHF')
                ->first();
    
            if (!$caller_wallet) {
                $missingData[] = "Wallet for patient ID {$caller->id} not found.";
                continue; // Skip processing this record if wallet not found
            }
    
            // Deduct from patient's wallet
            $caller_wallet->balance -= $bills;
            $caller_wallet->save();
    
            // Retrieve the member
            $receiver = User::where('extension_code', $member_id)->first();
            if (!$receiver) {
                $missingData[] = "User with extension_code $member_id not found.";
                continue; // Skip processing this record if user not found
            }
    
            $receiver_wallet = Wallet::where('user_id', $receiver->id)
                ->where('user_type', 'member')
                ->where('currency_code', 'CHF')
                ->first();
    
            if (!$receiver_wallet) {
                $missingData[] = "Wallet for user ID {$receiver->id} not found.";
                continue; // Skip processing this record if wallet not found
            }
    
            // Add to member's wallet
            $receiver_wallet->balance += ($bills * 0.7);
            $receiver_wallet->save();
    
            // Insert the new record into PhoneRecord table
            PhoneRecord::create([
                'patient_id' => $caller->id,
                'member_id' => $receiver->id,
                'call_id' => $record['uniqueid'],
                'call_duration' =>$call_duration,
                'start_call' => $record['calldate'],
                'end_call' => $record['calldate'],
                'call_date' => date('Y-m-d', strtotime($record['calldate'])),
                'price' => $bills,
                'status' => 'completed',
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Phone records (CDR) processed successfully.',
            'missing_data' => $missingData, // Provide details about missing data
        ], 201);
    }
    
}
