@extends('layouts.master')

@section('title', 'competitions')

@section('content')

<p>Results were succesfully published!</p>

<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href="{{route('evaluations.index')}}">Back</a>


@endsection
