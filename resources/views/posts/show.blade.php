@extends('layouts.app')

@section('content')
	<section class="section-single-post">
		<x-article>
			<header class="post__head">
				<h3>{{ $post->title }}</h3>
			</header><!-- /.post__head -->

			<div class="post__meta">
				<p>
					<span>Category: </span>

					<a href="{{ route('categories.show', ['slug' => $post->category->slug]) }}">
						{{ $post->category->title }}
					</a>
				</p>

				<p>
					<span>Author: </span>

					<a href="{{ route('users.show', ['id' => $post->user->id]) }}">
						{{ $post->user->name }}
					</a>
				</p>
			</div><!-- /.post__meta -->

			<div class="post__entry">
				<p>{{ $post->body }}</p>
			</div><!-- /.post__entry -->

			<footer class="post__foot">
				<div class="comments">
					<div class="collapse-arrow collapse">
						<input type="checkbox" />
						<div class="collapse-title flex items-center p-0 text-xl">
							<div class="comments__head prose-h4:m-0">
								<h4>Comments</h4>
							</div><!-- /.comments__head -->
						</div>

						<div class="collapse-content">
							<div class="comments__items">
								@foreach ($comments as $comment)
									<x-comment :body="$comment->body" :user="$comment->user"></x-comment>
								@endforeach
							</div><!-- /.comments__items -->
						</div>
					</div>
				</div><!-- /.comments -->
			</footer><!-- /.post__foot -->
		</x-article>
	</section><!-- /.section-single-post -->
@endsection
