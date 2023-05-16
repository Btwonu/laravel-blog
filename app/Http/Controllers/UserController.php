<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
	public function index(): View
	{
		return view('users/index', [ 'users' => User::all() ]);
	}

    public function show($id): View
	{
		$user = User::find($id);
		$comments = $user->comments()->with('post')->get();

		// dd($comments);

		return view('users/show', [ 'user' => $user, 'comments' => $comments ]);
	}
}
