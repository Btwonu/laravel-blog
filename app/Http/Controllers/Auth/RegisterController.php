<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth/register');
    }

    /**
     * Store a newly created user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request): Redirect
	{
		$formFields = $request->validate([
			'username' => 'required|unique:users,username|min:3|max:255',
			'email' => 'required|max:255|email:rfc,dns|unique:users,email',
			'password' => 'required|string|min:8|confirmed|max:255',
		]);

		$formFields['password'] = Hash::make($request->password);

		$user = User::create($formFields);

		Auth::login($user);

		return redirect(route('home'));
	}
}