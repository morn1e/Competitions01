@extends('layouts.master')

@section('title', 'competitions')

@section('content')

<h1>Create user</h1>


@if(Session::has('message'))
	{{ Session::get('message') }}
@endif

@foreach($errors->all() as $error)
	{{ $error }}
@endforeach
	

 

{!! Form::open ( ['route'=> 'users.store', 'files'=>'true']) !!}
{{ method_field('POST') }}
	<p>Username:
		{!! Form::text('username') !!}
	</p>
	<p>Name:
		{!! Form::text('name', 'Name here..') !!}
	</p>
	<p>Country:
		<select name="country_id" >
			@foreach($countries as $country)
			<option value="{{$country->id}}">{{$country->country}}</option>
			@endforeach
		</select>
	</p>
	<p>Email:
		{!! Form::text('email') !!}
	</p>
	<p>Password:
		{!! Form::password('password') !!}
	</p>
	<!-- <p>Picture
		{!! Form::file('img_path') !!}
	</p> -->	
	<p>
		Role:
		<select name="role_id" >
			@foreach($roles as $role)
			<option value="{{$role->id}}">{{$role->role}}</option>
			@endforeach
		</select>
		
	</p>
	



		{!! Form::submit('Save') !!}

{!! Form::close() !!}

<p>
	<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href="{{route('users.index')}}">Back</a>
</p>

@endsection