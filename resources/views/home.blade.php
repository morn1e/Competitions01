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
                    <nav>
                        <ul>
                            <li>
                                <a href=" {{ route('users.index') }} ">
                                Users
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('competitions.index') }} ">
                                Add arbiters and participants
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('evaluations.index') }} ">
                                Evaluations
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('arbiters.index') }} ">
                                Evaluate participants
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('results.index') }} ">
                                Results
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
