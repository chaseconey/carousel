
<ul>
	@foreach($posts as $post)
		<li>{{ $post->content }}</li>
	@endforeach
</ul>
<hr/>
