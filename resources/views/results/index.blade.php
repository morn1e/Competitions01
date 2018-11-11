@extends('layouts.master')

@section('title', 'competitions')

@section('content')

<h2>Results</h2>

@foreach($competitions as $competition)
	<div>
		<h3>
			<a href="{{route('results.show', $competition->id)}}">{{$competition->name}}</a>
		</h3>

		<p>
			{{ $competition->info }}
		</p>
	</div>
	
@endforeach

@endsection

