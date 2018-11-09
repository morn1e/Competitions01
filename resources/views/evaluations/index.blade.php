<h1>Evaluations</h1>

@foreach($competitions as $competition)
<h2>{{$competition->name}}</h2>
@foreach($evaluations as $participant)
@if($participant->competition->id == $competition->id)

	<ul>
		<li>
			<form action="{{route('evaluations.show', $participant->participant_id )}}">
				<label>{{$participant->participant->profile->name}} {{$participant->participant_id}}</label>
				<input type="hidden" name="competition_id" value="{{$competition->id}}">
				<input type="submit" name="submit" value="go">
				
			</form>


			<a href=""></a>
			{{-- {{ method_field('PATCH') }} --}}
			

		</li>
	</ul>
@endif
@endforeach
@endforeach


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
