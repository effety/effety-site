<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneRecord extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'member_id',
        'call_id',
        'call_duration',
        'start_call',
        'end_call',
        'call_date',
        'price',
        'status',
    ];

    /**
     * Get the patient associated with the phone record.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    /**
     * Get the member associated with the phone record.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
}
