<!DOCTYPE html>
<html data-theme="cupcake" lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My page</title>
	{{-- <link rel="stylesheet" href="/style.css"/> --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<header class="header">
		<div class="shell mx-auto max-w-screen-xl px-4">
			<div class="header__inner align-center mh-2 flex w-full py-4">
				<div class="navbar-start">
					<nav class="dropdown">
						<label tabindex="0" class="btn-ghost btn lg:hidden">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
							</svg>
						</label>

						<ul class="dropdown-content menu rounded-box menu-compact mt-3 w-52 bg-base-100 p-2 shadow">
							<li>
								<a href="{{ route('home') }}">Home</a>
							</li>

							<li>
								<a href="{{ route('users.index') }}">Users</a>
							</li>

							@auth
								<li>
									<a href="{{ route('posts.create') }}">Add a post</a>
								</li>

								<li>
									<form action="{{ route('auth.logout') }}" method="post">
										@csrf

										<button type="submit">Logout</button>
									</form>
								</li>
							@endauth

							@guest
								<li>
									<a href="{{ route('auth.register.create') }}">Register</a>
								</li>

								<li>
									<a href="{{ route('auth.login.create') }}">Login</a>
								</li>
							@endguest
						</ul>
					</nav>

					<a class="btn-ghost btn text-xl normal-case" href="{{ route('home') }}">Reads'</a>
				</div>

				<nav class="nav navbar-center hidden lg:flex">
					<ul class="menu menu-horizontal px-1">
						<li>
							<a href="{{ route('home') }}">Home</a>
						</li>

						<li>
							<a href="{{ route('users.index') }}">Users</a>
						</li>

						@auth
							<li>
								<a href="{{ route('posts.create') }}">Add a post</a>
							</li>

							<li>
								<form action="{{ route('auth.logout') }}" method="post">
									@csrf

									<button type="submit">Logout</button>
								</form>
							</li>
						@endauth

						@guest
							<li>
								<a href="{{ route('auth.register.create') }}">Register</a>
							</li>

							<li>
								<a href="{{ route('auth.login.create') }}">Login</a>
							</li>
						@endguest
					</ul>
				</nav><!-- /.nav -->

				<div class="navbar-end flex justify-end gap-4">

					<label class="swap swap-rotate">
						<input type="checkbox" class="js-theme-toggle" />

						<svg class="swap-on h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path
								d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
						</svg>

						<svg class="swap-off h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path
								d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
						</svg>
					</label>
				</div>
			</div>
		</div>
	</header>

	@yield('content')

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
