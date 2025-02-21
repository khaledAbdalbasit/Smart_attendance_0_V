<?php

namespace App\Http\Controllers\Instructor\InstructorAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentAuth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('dashboard.instructor.auth.login');

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('instructors')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('instructor.subject.index');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('instructors')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('instructor.login');
    }
}
