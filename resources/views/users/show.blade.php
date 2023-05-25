@extends('layouts.app')

@section('content')
	<section class="section-profile">
		<x-article>
			<header class="section__head">
				<p>This is {{ $user->name }}'s profile.</p>
			</header><!-- /.section__head -->

			<div class="section__comments">
				<p>Comments</p>

				<div class="comments">
					<div class="comments__items">
						@foreach ($comments as $comment)
							<x-comment :body="$comment->body" :user="$comment->user">
								<p>
									In:
									<a href="{{ route('posts.show', ['id' => $comment->post->id]) }}">{{ $comment->post->title }}</a>
								</p>
							</x-comment>
						@endforeach
					</div><!-- /.comments__items -->
				</div><!-- /.comments -->
			</div><!-- /.section__comments -->
		</x-article>
	</section><!-- /.section-profile -->
@endsection
