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

<table border="1">
	<tr>
		<td>
			Participant name
		</td>
		<td>
			Country
		</td>
		<td>
			Criterion 1
		</td>
		<td>
			Criterion 2
		</td>
		<td>
			Criterion 3
		</td>
	</tr>
	@foreach( $competitions_participant as $participant )

	<form action="{{route('arbiters.store')}}" method="POST">
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
				<input type="submit", value="Еvaluatе ">
			</td>
			
		</tr>
	</form>
	@endforeach
</table>

<a href="{{ route('arbiters.index') }}">Back</a>

@endsection
