@extends('layouts.app')

@section('content')
	<section class="section-categories">
		<div class="shell">
			<article class="category">
				<header class="category__head">
					<h3>{{ $category->title }}</h3>
				</header><!-- /.category__head -->

				<div class="category__meta">
					<p>{{ $category->description }}</p>
				</div><!-- /.category__meta -->
				
				<div class="posts category__posts">
					<div class="posts__items">
						<div class="posts__item">
							<article class="post">
								@foreach ($category->posts as $post)
									<header class="post__head">
										<h2>
											<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
										</h2>
									</header><!-- /.post__head -->
								@endforeach
							</article><!-- /.post -->
						</div><!-- /.posts__item -->
					</div><!-- /.posts__items -->
				</div><!-- /.posts -->
			</article><!-- /.category -->
		</div><!-- /.shell -->
	</section><!-- /.section-categories -->
@endsection