@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h2>Participants</h2>
<table border="1">
	<tr>
		<td>Name</td>
		<td>Cuntry</td>
	</tr>
	@foreach ($participants as $participant)
	<tr>
		<td>{{$participant->profile->name}}</td>
		<td>{{$participant->profile->country->country}}</td>
		<td><a href="{{route('users.edit', $participant->id)}}">Update</a></td>
		<td>
			{!!Form::open(['route'=> ['users.destroy', $participant->id], 'method'=>'delete']) !!}
				{!! Form::submit('Delete') !!}
			{!! Form::close()!!}
		</td>
	</tr>
	@endforeach
</table>
<a href="{{route('users.create')}}">Create</a>
<h2>Arbiters</h2>
<table border="1">
	<tr>
		<td>Name</td>
		<td>Cuntry</td>
	</tr>
	@foreach ($arbiters as $arbiter)
	<tr>
		<td>{{$arbiter->profile->name}}</td>
		<td>{{$arbiter->profile->country->country}}</td>
		<td><a href="{{route('users.edit', $arbiter->id)}}">Update</a></td>
		<td>
			{!!Form::open(['route'=> ['users.destroy', $arbiter->id], 'method'=>'delete']) !!}
				{!! Form::submit('Delete') !!}
			{!! Form::close()!!}
		</td>
	</tr>
	@endforeach
</table>
<a href="{{route('users.create')}}">Create</a>

@endsection
