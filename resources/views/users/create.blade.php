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
	

 
<div class="form-group">
	{!! Form::open ( ['route'=> 'users.store', 'files'=>'true']) !!}
	{{ method_field('POST') }}
		<p>Username:
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
		</p>
		<p>Name:
			{!! Form::text('name', 'Name here..', ['class' => 'form-control']) !!}
		</p>
		<p>Country:
			<select name="country_id" class="form-control">
				@foreach($countries as $country)
				<option value="{{$country->id}}">{{$country->country}}</option>
				@endforeach
			</select>
		</p>
		<p>Email:
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</p>
		<p>Password:
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</p>
		<!-- <p>Picture
			{!! Form::file('img_path') !!}
		</p> -->	
		<p>
			Role:
			<select name="role_id" class="form-control">
				@foreach($roles as $role)
				<option value="{{$role->id}}">{{$role->role}}</option>
				@endforeach
			</select>
			
		</p>
		



			{!! Form::submit('Save', ['class' => 'class="btn btn-success btn-lg active" role="button" aria-pressed="true"']) !!}

	{!! Form::close() !!}
</div>

<p>
	<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href="{{route('users.index')}}">Back</a>
</p>

@endsection