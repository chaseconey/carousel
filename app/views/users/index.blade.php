
@extends('master')

@section('content')

<h1>Users Page</h1>

<div id="users">
  @foreach($users as $user)
	<div class="row">
		<div class="col-md-12">
			<h3>{{ $user->name }}</h3>

			<div class="posts">
				@include('users.partials.posts', ['posts' => $user->posts])
			</div>
		</div>
	</div>
  @endforeach
</div>

@stop
