@extends('layouts.app')

@section('content')
<section class="section-authors">
	<div class="shell max-w-screen-xl mx-auto px-4">
		<div class="overflow-x-auto w-full">
			<table class="table w-full">
				<!-- head -->
				<thead>
					<tr>
						<th>Name</th>

						<th>Job</th>

						<th>Favorite Color</th>
						
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
						<x-user :id="$user->id" :username="$user->username"></x-user>
					@endforeach
				</tbody>

				<!-- foot -->
				<tfoot>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Job</th>
						<th>Favorite Color</th>
						<th></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div><!-- /.shell -->
</section><!-- /.section-authors -->
@endsection