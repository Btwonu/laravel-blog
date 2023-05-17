@extends('layouts.app')

@section('content')
	<section class="section-form">
		<div class="shell">
			<form action="{{ route( 'auth.login.authenticate' ) }}" method="POST" class="form">
				@csrf

				<div class="form__field">
					<label for="u-email">Email</label>

					<input id="u-email" type="email" name="email" value="{{ old('email') }}"/>

					<p class="form__error">
						@error('email')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

				<div class="form__field">
					<label for="u-password">Password</label>

					<input id="u-password" type="password" name="password" value="{{ old('password') }}"/>

					<p class="form__error">
						@error('password')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

				<div class="form__field">
					<button type="submit">Submit</button>
				</div><!-- /.form__field -->
			</form><!-- /.form -->
		</div><!-- /.shell -->
	</section><!-- /.section-form -->
@endsection