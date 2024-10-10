<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {
        if( !Auth::attempt(
                $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required']
                ])
        )) {
            throw ValidationException::withMessages([
                'email' => 'The credentials do not match'
            ]);
        }

        $request->session()->regenerate();
        return redirect('/events');
    }

    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
