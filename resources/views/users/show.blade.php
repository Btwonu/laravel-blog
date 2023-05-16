@extends('layouts.app')

@section('content')
	<section class="section-profile">
		<div class="shell">
			<header class="section__head">
				<p>This is {{ $user->name }}'s profile.</p>
			</header><!-- /.section__head -->

			<div class="section__comments">
				<p>Comments</p>

				<ul>
					@foreach ($comments as $comment)
						<li>
							<p>
								In: 
								<a href="{{ route('posts.show', [ 'id' => $comment->post->id ]) }}">{{ $comment->post->title }}</a>
							</p>

							<blockquote>
								<p>{{ $comment->body }}</p>
							</blockquote>
						</li>
					@endforeach
				</ul>
			</div><!-- /.section__comments -->
		</div><!-- /.shell -->
	</section><!-- /.section-profile -->
@endsection