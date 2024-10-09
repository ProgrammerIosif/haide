<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        Auth::login(
            User::create(
                $request->validate([
                    'name' => ['required', 'min:5'],
                    'email' => ['required', 'email'],
                    'password' => ['required', Password::min(6), 'confirmed']
                ])
            )
        );

        return redirect('/events');
    }
}
