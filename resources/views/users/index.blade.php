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
						<tr>
							<td>
								<div class="flex items-center space-x-3">
									<div class="avatar">
										<div class="mask mask-squircle w-12 h-12">
											<img src="https://i.pravatar.cc/150?u={{ $user->username }}" alt="Avatar" />
										</div>
									</div>

									<div>
										<div class="font-bold">
											<a href="{{ route( 'users.show', [ 'id' => $user->id ] ) }}">{{ $user->username }}</a>
										</div>
									</div>
								</div>
							</td>
	
							<td>
								Zemlak, Daniel and Leannon
								<br />
								<span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
							</td>
	
							<td>Purple</td>
	
							<th>
								<a href="{{ route( 'users.show', [ 'id' => $user->id ] ) }}" class="btn btn-ghost btn-xs">details</a>
							</th>
						</tr>
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