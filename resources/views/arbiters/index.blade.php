@extends('layouts.master')

@section('title', 'competitions')

@section('content')
<h1>Evaluate participants</h1>



@foreach( $competitions as $competition )
<p><a href=" {{ route('arbiters.show', $competition->id) }}">{{ $competition->name }}</a></p>
@endforeach

@endsection

