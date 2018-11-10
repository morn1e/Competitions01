@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h1>Evaluate participants</h1>



@foreach( $competitions as $competition )
<h3><a href=" {{ route('arbiters.show', $competition->id) }}">{{ $competition->name }}</a></h3>
	<p>
		{{ $competition->info }}
	</p>

@endforeach

@endsection

