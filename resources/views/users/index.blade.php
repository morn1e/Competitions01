@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h2>Participants</h2>
<table class="table table-striped" border="1">
	<tr>
		<td>Name</td>
		<td>Cuntry</td>
		
		<td>Delete</td>
	</tr>
	@foreach ($participants as $participant)
	<tr>
		<td>{{$participant->profile->name}}</td>
		<td>{{$participant->profile->country->country}}</td>
		
		<td>
			{!!Form::open(['route'=> ['users.destroy', $participant->id], 'method'=>'delete']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-warning']) !!}
			{!! Form::close()!!}
		</td>
	</tr>
	@endforeach
</table>
<a class="btn btn-success btn-lg active" role="button" aria-pressed="true" href="{{route('users.create')}}">Create</a>
<h2>Arbiters</h2>
<table class="table table-striped" border="1">
	<tr>
		<td>Name</td>
		<td>Cuntry</td>
		
		<td>Delete</td>
	</tr>
	@foreach ($arbiters as $arbiter)
	<tr>
		<td>{{$arbiter->profile->name}}</td>
		<td>{{$arbiter->profile->country->country}}</td>
		
		<td>
			{!!Form::open(['route'=> ['users.destroy', $arbiter->id], 'method'=>'delete']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-warning']) !!}
			{!! Form::close()!!}
		</td>
	</tr>
	@endforeach
</table>
<a class="btn btn-success btn-lg active" role="button" aria-pressed="true" href="{{route('users.create')}}">Create</a>

@endsection
