<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller {
    // Show register & Create Form

    public function create() {
        return view('users.register');
    }

    // Store New User
    public function store(Request $request) {

        $formFields = $request->validate([
            'name' => ['required', 'min:2', 'max:255', 'string'],
            'email' => ['required', 'email', Rule::unique("users", "email"), 'max:255'],
            'password' => 'required'|'c_password'|'min:12'|'max:32',
        ]);
        ddd($formFields);
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login automatically
        auth()->login($user);

        return redirect('/')->with('success', 'User Created and Logged in Successfully');
    }
}
