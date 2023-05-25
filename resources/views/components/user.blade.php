<tr>
	<td>
		<div class="flex items-center space-x-3">
			<div class="avatar">
				<div class="mask mask-squircle h-12 w-12">
					<img src="https://i.pravatar.cc/150?u={{ $username }}" alt="Avatar" />
				</div>
			</div>

			<div>
				<div class="font-bold">
					<a href="{{ route('users.show', ['id' => $id]) }}">{{ $username }}</a>
				</div>
			</div>
		</div>
	</td>

	<td>
		Zemlak, Daniel and Leannon
		<br />
		<span class="badge-ghost badge badge-sm">Desktop Support Technician</span>
	</td>

	<td>Purple</td>

	<th>
		<a href="{{ route('users.show', ['id' => $id]) }}" class="btn-ghost btn-xs btn">details</a>
	</th>
</tr>
