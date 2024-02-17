<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }

        session()->regenerate();
        return redirect('/admin');
    }

    public function index(){
        return view('sessions.login');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
