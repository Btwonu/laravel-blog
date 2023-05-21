<div class="card w-full bg-base-100 shadow-xl">
	<figure>
		<img src="https://picsum.photos/400/200" alt="Shoes" />
	</figure>

	<div class="card-body">
		<div class="card__tags flex flex-wrap gap-2">
			@foreach ($tags as $tag)
				<div class="badge">{{ $tag->title }}</div>
			@endforeach
		</div><!-- /.card__tags flex flex-wrap gap-2 -->

		<h2 class="card-title">
			<a href="{{ route('posts.show', ['id' => $id]) }}">{{ $title }}</a>
		</h2>

		<p>Port-salut manchego cheddar. Airedale cheese strings brie rubber cheese melted cheese swiss bavarian bergkase brie.
			Who moved my cheese...</p>

		<div class="card-actions justify-end">
			<a href="{{ route('posts.show', ['id' => $id]) }}" class="btn-primary btn">Read</a>
		</div>
	</div>
</div>
