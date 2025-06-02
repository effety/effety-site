<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PatientbookShare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = auth()->user();
        $user = $admin->patient;

        // Get the dynamic feature parameter for book_share
        $feature = 'book_share';

        // Logic to handle the subscription check for book_share
        $subscription = Subscription::where([
            ['user_id', '=', $user->id],
            ['user_type', '=', 'patient'],
            ['end_date', '>', Carbon::now()],
        ])
        ->whereHas('plan', fn($query) => $query->where('feature', $feature))
        ->first();

        // Redirect if no subscription matches the feature
        if (!$subscription) {
            return redirect()->route('showPlansByFeaturePatient', ['feature' => $feature])
            ->with('error', 'You need a valid subscription to share bookings.');

        }

        return $next($request);
    }
}
