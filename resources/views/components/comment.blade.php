<div class="comment">
	{{ $slot }}

	<div class="author comment__author">
		<div class="author__inner flex items-center gap-4">
			<div class="author__avatar not-prose h-12 w-12 rounded-[50%] overflow-hidden">
				<img class="h-full w-full object-cover" src="https://i.pravatar.cc/150?u={{ $user->username }}" alt="Avatar" />
			</div><!-- /.author__avatar -->

			<div class="author__head">
				<p>
					<a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
				</p>
			</div><!-- /.author__head -->
		</div><!-- /.author__inner flex align-center -->
	</div><!-- /.author -->

	<div class="comment__body">
		<blockquote>
			<p>{{ $body }}</p>
		</blockquote>
	</div><!-- /.comment__body -->
</div>
