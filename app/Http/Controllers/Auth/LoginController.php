<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
	public function create() : View
	{
		return view('auth/login');
	}

	public function authenticate(Request $request) : RedirectResponse
	{
		$credentials = $request->validate([
			'email' => 'required|email:rfc,dns',
			'password' => 'required',
		]);

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();
 
            return redirect()->intended(route('home'));
		}

		return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
	}
}
