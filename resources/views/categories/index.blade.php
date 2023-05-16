@extends('layouts.app')

@section('content')
	<section class="posts">
		<div class="shell">
			@foreach ($categories as $category)
				<p>
					<a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
				</p>
			@endforeach
		</div><!-- /.shell -->
	</section><!-- /.posts -->
@endsection