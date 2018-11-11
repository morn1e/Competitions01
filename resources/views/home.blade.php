@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <h2>Welcome! check your results!</h2>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('users.index') }} ">
                                    Users
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('competitions.index') }} ">
                                    Add arbiters and participants
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('evaluations.index') }} ">
                                    Evaluations
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('arbiters.index') }} ">
                                    Evaluate participants
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('results.index') }} ">
                                    Results
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
