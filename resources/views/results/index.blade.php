@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h1>Results</h1>

@foreach($competitions as $competition)
	<h2>
		<a href="{{route('results.show', $competition->id)}}">{{$competition->name}}</a>
	</h2>

	<p>
		{{ $competition->info }}
	</p>
@endforeach

@endsection

