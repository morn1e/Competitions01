@extends('layouts.master')

@section('title', 'competitions')

@section('content')

<h2>Ranking</h2>
<?php $num = 1; ?>

<table class="table table-striped" border="1">
	<tr>
		<td>Place</td>
		<td>Participant name</td>
		<td>Country</td>
		<td>Result</td>
		<td>Check</td>
		{{-- <td>Withdrawn</td> --}}


	</tr>
	@foreach($results as $result)
	<tr>
		<td>{{$num++}}</td>
		<td>{{$result->participant->profile->name}}</td>
		<td>{{$result->participant->profile->country->country}}</td>
		
		@if($result->result == 0)
		<td>
			Withdrawn
		</td>
		@else 
		<td>
			{{$result->result}}
		</td>
		@endif
		<td>
			<form action="{{route('evaluations.show', $result->participant_id )}}">
				
				<input type="hidden" name="competition_id" value="{{$result->competition_id}}">
				<input class="btn btn-success btn-lg active" role="button" aria-pressed="true" type="submit" name="submit" value="Check results">
			</form>
		</td>
		{{-- <td>
			<form action="{{route('competitions.update', $result->participant_id )}}">
				
				<input type="hidden" name="competition_id" value="{{$result->competition_id}}">
				<input class="btn btn-success btn-lg active" role="button" aria-pressed="true" type="submit" name="submit" value="Withdrawn">
			</form>
		</td> --}}
	</tr>
	@endforeach
	
</table>
<p>
	<a href="{{route('results.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >Back</a>
</p>

@endsection





