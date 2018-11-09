{{-- //{{dd($results)}}
 --}}

 <h2>Ranking</h2>
<?php $num = 1; ?>

<table border="1">
	<tr>
		<td>Place</td>
		<td>Participant name</td>
		<td>Country</td>
		<td>Result</td>
	</tr>
	@foreach($results as $result)
	<tr>
		<td>{{$num++}}</td>
		<td>{{$result->participant->profile->name}}</td>
		<td>{{$result->participant->profile->country->country}}</td>
		<td>{{$result->result}}</td>
		<td>
			<form action="{{route('evaluations.show', $result->participant_id )}}">
				<input type="hidden" name="competition_id" value="{{$result->competition_id}}">
				<input type="submit" name="submit" value="go">
				
			</form>
		</td>
	</tr>
	@endforeach
	
</table>

<a href="{{route('results.index')}}">Back</a>




