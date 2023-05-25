@extends('layouts.app')

@section('content')
	<section class="section-form">
		<div class="shell mx-auto max-w-screen-xl px-4">
			<form action="{{ route('posts.store') }}" method="POST" class="form" enctype="multipart/form-data">
				@csrf

				<div class="form__field">
					<label for="p-title">Post title</label>

					<input id="p-title" type="text" name="title" value="{{ old('title') }}" />

					<p class="form__error">
						@error('title')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

				<div class="form__field">
					<label for="p-body">Post body</label>

					<textarea name="body" id="p-body">{{ old('body') }}</textarea>

					<p class="form__error">
						@error('body')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

				<div class="form__field">
					<label for="p-category">Post category</label>

					<select name="category" id="p-category">
						<option value="">Select a category</option>

						@foreach ($categories as $category)
							<option value="{{ $category->id }}" {{ old('category') == $category->slug ? 'selected' : '' }}>
								{{ $category->title }}
							</option>
						@endforeach
					</select>

					<p class="form__error">
						@error('category')
							{{ $message }}
						@enderror
					</p><!-- /.form__error -->
				</div><!-- /.form__field -->

				<div class="form__field">
					<input id="p-image" type="file" name="image" accept="image/png, image/jpeg" value="{{ old('image') }}" />

					<p class="form__error">
						@error('image')
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
