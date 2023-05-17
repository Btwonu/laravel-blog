@extends('layouts.app')

@section('content')
	<section class="section-form">
		<div class="shell">
			<form action="{{ route( 'auth.register.store' ) }}" method="POST" class="form">
				@csrf

				<div class="form__field">
					<label for="u-username">Username</label>

					<input id="u-username" type="text" name="username" value="{{ old('username') }}"/>

					<p class="form__error">
						@error('username')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

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
					<label for="u-password_confirmation">Confirm password</label>

					<input id="u-password_confirmation" type="password" name="password_confirmation" value="{{ old('password') }}"/>

					<p class="form__error">
						@error('password_confirmation')
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