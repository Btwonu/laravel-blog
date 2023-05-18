<div class="card w-full bg-base-100 shadow-xl">
	<figure>
		<img src="https://picsum.photos/400/200" alt="Shoes" />
	</figure>

	<div class="card-body">
	  <h2 class="card-title">
		<a href="{{ route('posts.show', ['id' => $id]) }}">{{ $title }}</a>
	  </h2>

	  <p>Port-salut manchego cheddar. Airedale cheese strings brie rubber cheese melted cheese swiss bavarian bergkase brie. Who moved my cheese...</p>

	  <div class="card-actions justify-end">
		<a href="{{ route('posts.show', ['id' => $id]) }}" class="btn btn-primary">Read</a>
	  </div>
	</div>
  </div>