@extends('layouts.app')

@section('content')
	<section class="section-authors">
		<div class="shell">
			<ul>
				@foreach ($users as $user)
					<li>
						<a href="{{ route( 'users.show', [ 'id' => $user->id ] ) }}">{{ $user->name }}</a>
					</li>
				@endforeach
			</ul>
		</div><!-- /.shell -->
	</section><!-- /.section-authors -->
@endsection