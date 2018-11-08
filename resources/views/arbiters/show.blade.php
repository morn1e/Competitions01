<h1>Participants</h1>


{{dd($competitions_participant)}}
{{-- @foreach( $competitions_participant as $participant )
{{$participant->participant_id->username}}
@endforeach --}}

{{-- <form action="" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="competition_id" value="{{$competition_id->id}}">
		@foreach( $participants as $participant )	
		<option value="{{ $participant->id }}">{{ $participant->profile->name }}</option>
		@endforeach
	</select>
	<input type="submit", value="Add">
	
</form> --}}