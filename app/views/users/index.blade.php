
@extends('master')

@section('content')

<h1>Users Page</h1>
<ul>
  @foreach($users as $user)
	<li>{{ $user->name }}</li>
  @endforeach
</ul>

@stop
