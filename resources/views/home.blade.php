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

                    You are logged in! <br>
                    <br>
                    If you want to enter the mian page, click the button below.<br>
                    
                    <a href="{{ url ('/main') }}"><button>go to main page-></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
