<!DOCTYPE html>
<html>
<head>
	<title>Competitions - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class = "video">
        <video src="{{URL::asset('video_dance.mp4')}}" type="video/mp4" id = "video_dance" preload="auto" autoplay="true" loop="loop" muted="muted">
            
        </video>
    </div>
       <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'World Dance Awards 2018') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <p>
                                    {{ Auth::user()->profile->name }}
                                </p>
                                <p>
                                   @if(Auth::user()->role_id ==1)
                                    {{'Admin'}}
                                    @elseif(Auth::user()->role_id ==2)
                                    {{'Arbiter'}}
                                    @elseif(Auth::user()->role_id ==3)
                                    {{'Participant'}}
                                    @endif
                                </p>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
        </main>
    </div>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(Auth::user()->role_id == 1)
                <li class="nav-item ">
                    <a class="nav-link" href=" {{ route('users.index') }} ">
                    Users
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href=" {{ route('competitions.index') }} ">
                    Add arbiters and participants
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href=" {{ route('evaluations.index') }} ">
                    Evaluations
                    </a>
                </li>
                @endif
                @if(Auth::user()->role_id ==2)
                <li class="nav-item ">
                    <a class="nav-link" href=" {{ route('arbiters.index') }} ">
                    Evaluate participants
                    </a>
                </li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link" href=" {{ route('results.index') }} ">
                    Results
                    </a>
                </li>
            </ul>
        </div>
    </nav>
                 
	<hr>
        <div id="wrapper">
	@yield('content')
        </div>

	<hr>

	<div id="wrapper" class="footer">
		D. Qabrawi & P. Valcheva Co. 2018
        All rights reserved &#169
	</div>
</body>
</html>




