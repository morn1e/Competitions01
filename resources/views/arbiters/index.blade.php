<h1>Competitions</h1>



@foreach( $competitions as $competition )
<p><a href=" {{ route('arbiters.show', $competition->id) }}">{{ $competition->name }}</a></p>
@endforeach