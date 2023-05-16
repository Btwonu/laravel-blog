@extends('layouts.app')

@section('content')
	<section class="section-single-post">
		<div class="shell">
			<article class="post">
				<header class="post__head">
					<h3>{{ $post->title }}</h3>
				</header><!-- /.post__head -->

				<div class="post__meta">
					<p>
						<span>Category: </span>

						<a href="{{ route( 'categories.show', [ 'slug' => $post->category->slug ] ) }}">
							{{ $post->category->title }}
						</a>
					</p>

					<p>
						<span>Author: </span>

						<a href="{{ route( 'users.show', [ 'id' => $post->user->id ] ) }}">
							{{ $post->user->name }}
						</a>
					</p>
				</div><!-- /.post__meta -->
				
				<div class="post__entry">
					<p>{{ $post->body }}</p>
				</div><!-- /.post__entry -->

				<footer class="post__foot">
					<div class="comments">
						<div class="comments__head">
							<h4>Comments</h4>
						</div><!-- /.comments__head -->

						<div class="comments__items">
							@foreach ($comments as $comment)
								<div class="comments__item">
									<div class="comment">
										<div class="comment__head">
											<div class="author">
												<div class="author__cols">
													<div class="author__col">
														<div class="author__avatar"></div><!-- /.author__avatar -->
													</div><!-- /.author__col -->

													<div class="author__col">
														<div class="author__head">
															<p>
																<a href="{{ route( 'users.show', [ 'id' => $comment->user->id ] ) }}">{{ $comment->user->name }}</a>
															</p>
														</div><!-- /.author__head -->
													</div><!-- /.author__col -->
												</div><!-- /.author__cols -->
											</div><!-- /.author -->
										</div><!-- /.comment__head -->

										<div class="comment__entry">
											<p>
												{{ $comment->body }}
											</p>
										</div><!-- /.comment__entry -->
									</div><!-- /.comment -->								
								</div><!-- /.comments__item -->
							@endforeach
						</div><!-- /.comments__items -->
					</div><!-- /.comments -->
				</footer><!-- /.post__foot -->
			</article><!-- /.post -->
		</div><!-- /.shell -->
	</section><!-- /.section-single-post -->
@endsection