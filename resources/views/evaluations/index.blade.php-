<h1>Evaluations</h1>
<!-- {{-- {{dd($evaluations)}}
 --}}
{{--  <pre>
@foreach( $evaluations as $participant )
{{$participant->id}}
@endforeach
</pre> --}} -->

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
			Competition
		</td>
		<td>
			Participant
		</td>
		<td>
			Arbiter
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
		<td>
			<form action="{{route('evaluations.update', $participant->id)}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
			<input type="submit" name="submit" value="Anulate">
			</form>
		</td>
	</tr>
@endforeach



<!-- </table>
<p>
	<form action="" method="POST">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		<input type="submit" name="submit" value="Publish">
	</form>
</p>

<a href="{{route('results.create')}}">Results</a> -->