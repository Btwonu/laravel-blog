@extends('layouts.app')

@section('content')

<section class="section-form">
	<div class="shell">
			<form action="{{ route('home') }}" class="form">
				<label for="p-search">Search posts</label>

				<input type="search" name="search" id="p-search" value="{{ request('search') }}"/>
			</form><!-- /.form -->
		</div><!-- /.shell -->
	</section><!-- /.section-form -->
	
	<section class="section-posts">
		<div class="shell">
			@if ($posts->count())
				<div class="posts">
					<div class="posts__items">
						@foreach ($posts as $post)
							<div class="posts__item">
								<article class="post">
									<h2>
										<a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
									</h2>
								</article><!-- /.post -->
							</div><!-- /.posts__item -->
						@endforeach
					</div><!-- /.posts__items -->
				</div><!-- /.posts -->
			@else
				<p>No posts here.</p>
			@endif
		</div><!-- /.shell -->
	</section><!-- /.section-posts -->
@endsection