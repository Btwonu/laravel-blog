@extends('layouts.app')

@section('content')
	<section class="section-form my-8">
		<div class="shell mx-auto max-w-screen-xl px-4">
			<div class="section__inner md:flex md:justify-between">
				<form method="get" action="{{ route('home') }}"
					class="form js-post-filter-form w-full justify-center md:flex md:flex-wrap md:justify-between">
					<div class="form__field flex justify-center md:mt-0 md:min-w-[20rem]">
						<label class="hidden" for="p-search">Search posts</label>

						<input type="search" placeholder="Search posts" name="search" id="p-search" value="{{ request('search') }}"
							class="input-bordered input-info input w-full max-w-xs" />
					</div><!-- /.form__field -->

					<div class="form__field mt-4 flex justify-center md:mt-0 md:min-w-[20rem]">
						<label for="s-category" class="hidden"></label><!-- /.hidden -->

						<select id="s-category" class="select-info select w-full max-w-xs" name="category"
							value="{{ request('category') }}">
							<option selected value=''>Category</option>

							@foreach ($categories as $category)
								<option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
									{{ $category->title }}</option>
							@endforeach
						</select>
					</div><!-- /.form__field -->

					<div class="form__field js-category-checkboxes mt-8 w-full">
						<div class="tags">
							<div class="tags__items flex flex-wrap justify-center gap-4 md:justify-start">
								@foreach ($tags as $i => $tag)
									<div class="tags__item">
										<div class="tag relative">
											<label class="absolute inset-0 cursor-pointer" for="{{ 'tag-' . $tag->id }}"></label>

											<input id="{{ 'tag-' . $tag->id }}" class="peer hidden" type="checkbox" name="tags[]"
												value="{{ $tag->title }}" {{ request('tags') && in_array($tag->title, request('tags')) ? 'checked' : '' }} />

											<span
												class="leading-sm inline-flex items-center rounded-full bg-orange-200 py-2 px-4 text-xs font-bold uppercase text-dark peer-checked:bg-orange-400">{{ $tag->title }}</span>
										</div><!-- /.tag -->
									</div><!-- /.tags__item -->
								@endforeach
							</div><!-- /.tags__items -->
						</div><!-- /.tags -->
					</div><!-- /.form__field -->
				</form><!-- /.form -->
			</div><!-- /.section__inner -->
		</div><!-- /.shell -->
	</section><!-- /.section-form -->

	<section class="section-posts my-8">
		<div class="shell mx-auto max-w-screen-xl px-4">
			@if ($posts->count())
				<div class="posts">
					<div class="posts__items md:-mx-4 md:flex md:flex-wrap">

						@foreach ($posts as $post)
							<div class="posts__item flex flex-2 flex-grow py-4 md:p-4 lg:flex-3">
								<x-post :id="$post->id" :title="$post->title" :tags="$post->tags" :imgUrl="$post->img_url">
								</x-post>
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
