<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function Index(): View
    {
        return View('login');
    }

    public function Login(): RedirectResponse
    {
        if (auth()->attempt(request()->only(['username', 'password'])))
            return redirect('/company');
        
        validator(
            request()->all(),
            [
                'username' => 'required',
                'password' => 'required'
            ]
        )->validate();
        return redirect()->back()->withErrors(['username' => 'Invalid Username or Password!']);
    }
}
