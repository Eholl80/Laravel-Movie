@extends('layouts.app')

@include('inc/message')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modify User') }}</div>

                <div class="card-body">
                        
                {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name') }}
                        {{Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'name'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Email') }}
                        {{Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'email'])}} 
                    </div>
                @if(Auth::user()->is_admin)
                    <div class="form-group">
                        {{Form::label('is_admin', 'Is admin') }}
                        {{Form::text('is_admin', $user->is_admin, ['class'=>'form-control', 'placeholder'=>'Is admin'])}} 
                    </div>
                @else
                    <div class="form-group d-none">
                        {{Form::label('is_admin', 'Is admin') }}
                        {{Form::text('is_admin', $user->is_admin, ['class'=>'form-control', 'placeholder'=>'Is admin'])}} 
                    </div>
                @endif
                    <div class="form-group">
                        {{Form::label('password', 'Password') }}
                        {{Form::text('password', $user->password, ['class'=>'form-control', 'placeholder'=>'Password'])}} 
                    </div>
                    <div class="text-center">      
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection