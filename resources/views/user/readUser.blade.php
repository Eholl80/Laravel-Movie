@extends('layouts.app')

@section('content')
    
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <h3>{{$user->name}}</h3>
                        <small>{{$user->email}}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection