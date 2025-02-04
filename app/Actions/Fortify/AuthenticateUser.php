<?php
namespace App\Actions\Fortify;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;

class AuthenticateUser
{
    public function handle(Request $request, $next)
    {
        // Custom logic before authentication
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }

        // Custom logic after successful authentication
        return $next($request);
    }
}
