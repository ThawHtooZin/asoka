<?php

namespace App\Http\Middleware;

use App\Models\Book;
use App\Models\BookPurchase;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BookOwnershipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the book ID from the route
        $bookId = $request->route('id');

        $bookdata = Book::where('id', $bookId)->first();

        if ($bookdata->price != 0) {
            // Check if the current user has a confirmed purchase for this book
            $isOwned = BookPurchase::where('book_id', $bookId)
                ->where('user_id', Auth::id())
                ->where('status', 'confirmed')
                ->exists();

            if (!$isOwned && Auth::user()->roles()->first()->name != 'admin') {
                // Redirect back if the user doesn't own the book
                return redirect()->route('elibrary.show', $bookId)->with('error', 'You do not own this book.');
            }
        }


        // Allow the request to proceed if ownership is confirmed
        return $next($request);
    }
}
