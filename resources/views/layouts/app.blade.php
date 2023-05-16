<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My page</title>
	<link rel="stylesheet" href="/style.css"/>
</head>

<body>
	<?php
	// @dd(get_defined_vars());
	?>

	<header class="header">
		<div class="shell">
			<div class="header__inner">
				<div class="header__logo"></div><!-- /.header__logo -->
				
				<nav class="nav">
					<ul>
						<li>
							<a href="{{ route( 'home' ) }}">Home</a>
						</li>
						
						<li>
							<a href="{{ route( 'categories.index' ) }}">Categories</a>
						</li>

						<li>
							<a href="{{ route( 'users.index' ) }}">Users</a>
						</li>

						<li>
							<a href="{{ route( 'posts.create' ) }}">Add a post</a>
						</li>

						<li>
							<a href="{{ route( 'auth.register' ) }}">Register</a>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.header__inner -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	@yield('content')

	<script src="/app.js"></script>
</body>
</html>