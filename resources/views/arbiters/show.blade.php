@extends('layouts.master')

@section('title', 'competitions')

@section('content')

<h1>Participants</h1>
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
			Participant name
		</td>
		<td scope="col">
			Country
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
		<td>
			Evaluation
		</td>
	</tr>
	@foreach( $competitions_participant as $participant )

	<form class="navbar-form navbar-left" role="search" action="{{route('arbiters.store')}}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="competition_id" value="{{$competition_id->id}}">
		<tr>
			<td>
				{{$participant->participant->profile->name}}
				<input type="hidden" name="participant_id" value="{{$participant->participant_id}}">
			</td>
			<td>
				{{$participant->participant->profile->country->country}}
			</td>
			<td>
				<input type="number" name="criterion_1">
			</td>
			<td>
				<input type="number" name="criterion_2">
			</td>
			<td>
				<input type="number" name="criterion_3">
			</td>
			<td>
				<input class="btn btn-success btn-lg active" role="button" aria-pressed="true" type="submit" value="Еvaluatе ">
			</td>
			
		</tr>
	</form>
	@endforeach
</table>

<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href="{{ route('arbiters.index') }}">Back</a>

@endsection
