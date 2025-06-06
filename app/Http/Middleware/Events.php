<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Events
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $admin = auth()->user();
        $user = $admin->user;

        // Get the dynamic feature parameter
        $feature = 'events';

        // Example logic to handle the feature (customize this as needed)
        $subscription = Subscription::where('user_id', $user->id)
            ->whereHas('plan', function ($query) use ($feature) {
                $query->where('feature', $feature);
            })
            ->where('end_date', '>', Carbon::now()) // Check if the subscription is still valid
            ->first();

        // Redirect if no subscription matches the feature
        if (!$subscription) {
            return redirect()->route('plans.byFeature', ['feature' => $feature]);
        }

        return $next($request);
    }
}
