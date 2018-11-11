@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h1>Evaluations</h1>

@foreach($competitions as $competition)
<h2>{{$competition->name}}</h2>
@foreach($evaluations as $participant)
@if($participant->competition->id == $competition->id)

	<ul class="breadcrumb">
		<li>
			<form action="{{route('evaluations.show', $participant->participant_id )}}">
				<label>{{$participant->participant->profile->name}} {{$participant->participant_id}}</label>
				<input type="hidden" name="competition_id" value="{{$competition->id}}">
				<input class="btn btn-success btn-lg active" role="button" aria-pressed="true" type="submit" name="submit" value="Check results">
				
			</form>
		</li>
	</ul>
@endif
@endforeach
@endforeach








<h1>Evaluations</h1>
<p>
@if(Session::has('message'))
	{{ Session::get('message') }}
@endif
</p>

@foreach($errors->all() as $error)
	{{ $error }}
@endforeach

<table class="table table-striped" border="1">
	<tr>
		<td scope="col">
			Competition
		</td>
		<td scope="col">
			Participant
		</td>
		<td scope="col">
			Arbiter
		</td>
		<td scope="col">
			Criterion 1
		</td>
		<td scope="col">
			Criterion 2
		</td>
		<td scope="col">
			Criterion 3
		</td>
		@if(Auth::user()->role_id == 1)
		<td scope="col">
			Anulation
		</td>
		@endif
	</tr>
@foreach( $evaluations as $participant )

	<tr>
		<td>
			{{$participant->competition->name}}
		</td>
		<td>
			{{$participant->participant->profile->name}}
		</td>
		<td>
			{{$participant->arbiter->profile->name}}
		</td>
		<td>
			{{$participant->criterion_1}}
		</td>
		<td>
			{{$participant->criterion_2}}
		</td>
		<td>
			{{$participant->criterion_3}}
		</td>
		@if(Auth::user()->role_id == 1)
		<td>
			<form action="{{route('evaluations.update', $participant->id)}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
			<input class="btn btn-warning btn-lg active" role="button" aria-pressed="true" type="submit" name="submit" value="Anulate">
			</form>
		</td>
		@endif
	</tr>

@endforeach
</table>

@endsection
