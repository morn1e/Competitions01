{{-- //{{dd($evaluations)}} --}}
<?php 	$collection1 = collect([]);
		$collection2 = collect([]);
		$collection3 = collect([]); ?>

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
	<?php $collection1->prepend($participant->criterion_1);

	$collection2->prepend($participant->criterion_2);
	$collection3->prepend($participant->criterion_3) ;
	
	?>
	     

	
@endforeach
 <?php

 	$avg_c1 = $collection1->avg();
 	$avg_c2 = $collection2->avg();
 	$avg_c3 = $collection3->avg();
 	
 	$result = $avg_c1 + $avg_c2 + $avg_c3;

 ?>
</form>

</table>
<p>
<form action="{{route('results.update', $participant->participant_id)}}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		
	<input type="hidden" name="result" value="{{$result}}">
	<input type="hidden" name="participant_id" value="{{$participant->participant_id}}">
	<input type="hidden" name="competition_id" value="{{$participant->competition->id}}">

	

	<input type="submit" name="submit" value="Publish">
</form>

</p>