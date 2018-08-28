@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User admin</div>

                <div class="card-body">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creation at</th>
                            <th scope="col">Is admin</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users) > 0)
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->is_admin}}</td>
                                <td><a href="/user/{{$user->id}}/edit" class="btn btn-secondary mr-3 float-left">Modify</a>
                                {!! Form::open(['action' => ['UsersController@destroy', $user->id],'class' =>'d-inline-block', 'method' => 'GET']) !!}
                                    {{Form::hidden('_method','DELETE')}} 
                                    {{Form::submit('Delete',['class'=>'btn btn-secondary '])}}
                                {!!Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    {{$users->links()}}
</div>

@endsection