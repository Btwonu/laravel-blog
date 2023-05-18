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
    <?php
    // @dd(get_defined_vars());
    ?>

    <header class="header">
		<div class="shell max-w-screen-xl mx-auto px-4">
			<div class="header__inner flex align-center mh-2 w-full py-4">
				<div class="navbar-start">
					<nav class="dropdown">
						<label tabindex="0" class="btn btn-ghost lg:hidden">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
								stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M4 6h16M4 12h8m-8 6h16" />
							</svg>
						</label>
		
						<ul class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
							<li>
								<a href="{{ route('home') }}">Home</a>
							</li>
			
							<li>
								<a href="{{ route('categories.index') }}">Categories</a>
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
		
					<a class="btn btn-ghost normal-case text-xl" href="{{ route('home') }}">Reads'</a>
				</div>
		
				<nav class="nav navbar-center hidden lg:flex">
					<ul class="menu menu-horizontal px-1">
						<li>
							<a href="{{ route('home') }}">Home</a>
						</li>
		
						<li>
							<a href="{{ route('categories.index') }}">Categories</a>
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
					<span class="material-icons">dark_mode</span>

					<input type="checkbox" class="js-theme-toggle toggle toggle-primary" />
				</div>
			</div>
		</div>
    </header>

    @yield('content')

    <script src="/app.js"></script>
</body>

</html>
