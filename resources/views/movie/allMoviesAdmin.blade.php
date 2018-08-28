@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Movie admin
                    <a href="{{ url('movie/create') }}" class="btn btn-secondary mr-3 float-right">Add movie</a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Director</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($movies) > 0)
                            @foreach($movies as $movie)
                            <tr>
                                <th scope="row">{{$movie->title}}</th>
                                <td>{{$movie->year}}</td>
                                <td>{{$movie->director}}</td>
                                <td><a href="#" class="btn btn-secondary mr-3">Modify</a><a href="#" class="btn btn-secondary">Delete</a></td>
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
    {{$movies->links()}}
</div>

@endsection