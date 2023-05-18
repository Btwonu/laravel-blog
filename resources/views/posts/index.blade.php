@extends('layouts.app')

@section('content')

<section class="section-form my-8">
	<div class="shell max-w-screen-xl mx-auto px-4">
			<form action="{{ route('home') }}" class="form flex justify-center">
				<label class="hidden" for="p-search">Search posts</label>

				<input 
					type="search" 
					placeholder="Search posts" 
					name="search" 
					id="p-search" 
					value="{{ request('search') }}" 
					class="input input-bordered input-info w-full max-w-xs" 
				/>
			</form><!-- /.form -->
		</div><!-- /.shell -->
	</section><!-- /.section-form -->
	
	<section class="section-posts my-8">
		<div class="shell max-w-screen-xl mx-auto px-4">
			@if ($posts->count())
				<div class="posts">
					<div class="posts__items md:flex md:flex-wrap">
						@foreach ($posts as $post)
							<div class="posts__item flex flex-2 flex-grow py-4 md:p-4 lg:flex-3">
								<x-post :id="$post->id" :title="$post->title"></x-post>
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