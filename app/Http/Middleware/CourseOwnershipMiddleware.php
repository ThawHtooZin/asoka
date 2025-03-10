<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\CoursePurchase;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CourseOwnershipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the book ID from the route
        $courseId = $request->route('course');

        $courseData = Course::where('id', $courseId)->first();
        if ($courseData->price != 0) {
            // Check if the current user has a confirmed purchase for this book
            $isOwned = CoursePurchase::where('course_id', $courseId)
                ->where('user_id', Auth::id())
                ->where('status', 'confirmed')
                ->exists();

            if (!$isOwned && Auth::user()->roles()->first()->name != 'admin') {
                // Redirect back if the user doesn't own the book
                return back()->with('error', 'You do not own this course.');
            }
        }

        // Allow the request to proceed if ownership is confirmed
        return $next($request);
    }
}
