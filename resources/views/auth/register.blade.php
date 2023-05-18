@extends('layouts.app')

@section('content')

<section class="section-form my-8">
	<div class="shell max-w-screen-xl mx-auto px-4">
		<div class="card w-96 bg-base-100 shadow-xl mx-auto">
			<div class="card-body">
				<form action="{{ route( 'auth.register.store' ) }}" method="POST" class="form">
					@csrf
				
					<div class="form__field py-4">
						<label class="block mb-1" for="u-username">Username</label>
				
						<input class="input input-bordered input-info w-full max-w-xs" id="u-username" type="text" name="username" value="{{ old('username') }}" />
				
						<p class="form__error">
							@error('username')
							{{ $message }}
							@enderror
						</p><!-- /.form__error -->
					</div><!-- /.form__field -->
				
					<div class="form__field py-4">
						<label class="block mb-1" for="u-email">Email</label>
				
						<input class="input input-bordered input-info w-full max-w-xs" id="u-email" type="email" name="email" value="{{ old('email') }}" />
				
						<p class="form__error">
							@error('email')
							{{ $message }}
							@enderror
						</p><!-- /.form__error -->
					</div><!-- /.form__field -->
				
					<div class="form__field py-4">
						<label class="block mb-1" for="u-password">Password</label>
				
						<input class="input input-bordered input-info w-full max-w-xs" id="u-password" type="password" name="password" value="{{ old('password') }}" />
				
						<p class="form__error">
							@error('password')
							{{ $message }}
							@enderror
						</p><!-- /.form__error -->
					</div><!-- /.form__field -->
				
					<div class="form__field py-4">
						<label class="block mb-1" for="u-password_confirmation">Confirm password</label>
				
						<input class="input input-bordered input-info w-full max-w-xs" id="u-password_confirmation" type="password" name="password_confirmation" value="{{ old('password') }}" />
				
						<p class="form__error">
							@error('password_confirmation')
							{{ $message }}
							@enderror
						</p><!-- /.form__error -->
					</div><!-- /.form__field -->
				
					<div class="form__field py-4">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div><!-- /.form__field -->
				</form><!-- /.form -->
			</div>
		</div>
	</div><!-- /.shell -->
</section><!-- /.section-form -->
@endsection