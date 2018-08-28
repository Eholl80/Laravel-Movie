@extends('layouts.app')

@include('inc/message')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modify Movie') }}</div>

                <div class="card-body">
                        
                {!! Form::open(['action' => ['MoviesController@update', $movie->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('imdb_id', 'IMDB ID') }}
                        {{Form::text('imdb_id', $movie->imdb_id, ['class'=>'form-control', 'placeholder'=>'imdb_id'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('title', 'Title') }}
                        {{Form::text('title', $movie->title, ['class'=>'form-control', 'placeholder'=>'Title'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('why', 'Why ?') }}
                        {{Form::textarea('why', $movie->why, ['class'=>'form-control', 'placeholder'=>'why ?'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('year', 'year') }}
                        {{Form::text('year', $movie->year, ['class'=>'form-control', 'placeholder'=>'year'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('poster', 'poster') }}
                        {{Form::text('poster', $movie->poster, ['class'=>'form-control', 'placeholder'=>'poster'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('plot', 'plot') }}
                        {{Form::text('plot', $movie->plot, ['class'=>'form-control', 'placeholder'=>'plot'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('writers', 'writers') }}
                        {{Form::text('writers', $movie->writers, ['class'=>'form-control', 'placeholder'=>'writers'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('actors', 'actors') }}
                        {{Form::text('actors', $movie->actors, ['class'=>'form-control', 'placeholder'=>'actors'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('director', 'director') }}
                        {{Form::text('director', $movie->director, ['class'=>'form-control', 'placeholder'=>'director'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('genre', 'genre') }}
                        {{Form::text('genre', $movie->genre, ['class'=>'form-control', 'placeholder'=>'genre'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('runtime', 'runtime') }}
                        {{Form::text('runtime', $movie->runtime, ['class'=>'form-control', 'placeholder'=>'runtime'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('type', 'type') }}
                        {{Form::text('type', $movie->type, ['class'=>'form-control', 'placeholder'=>'type'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('production', 'production') }}
                        {{Form::text('production', $movie->production, ['class'=>'form-control', 'placeholder'=>'production'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('budget', 'budget') }}
                        {{Form::text('budget', $movie->writers, ['class'=>'form-control', 'placeholder'=>'budget'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('country', 'country') }}
                        {{Form::text('country', $movie->country, ['class'=>'form-control', 'placeholder'=>'country'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('metascore', 'metascore') }}
                        {{Form::text('metascore', $movie->metascore, ['class'=>'form-control', 'placeholder'=>'metascore'])}} 
                    </div>
                    
                    <div class="form-group">
                        {{Form::label('imdbRating', 'imdbRating') }}
                        {{Form::text('imdbRating',  $movie->imdbRating, ['class'=>'form-control', 'placeholder'=>'imdbRating'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('imdbVotes', 'imdbVotes') }}
                        {{Form::text('imdbVotes', $movie->imdbVotes , ['class'=>'form-control', 'placeholder'=>'imdbVotes'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('Awards', 'Awards') }}
                        {{Form::text('Awards', $movie->Awards, ['class'=>'form-control', 'placeholder'=>'Awards'])}} 
                    </div>   
                    <div class="form-group">
                        {{Form::label('Rated', 'Rated') }}
                        {{Form::text('Rated', $movie->Rated, ['class'=>'form-control', 'placeholder'=>'Rated'])}} 
                    </div>     
                    <div class="form-group">
                        {{Form::label('Released', 'Released') }}
                        {{Form::text('Released', $movie->Released, ['class'=>'form-control', 'placeholder'=>'Released'])}} 
                    </div> 

                    <div class="form-group">
                        {{Form::label('language', 'language') }}
                        {{Form::text('language', $movie->language, ['class'=>'form-control', 'placeholder'=>'language'])}} 
                    </div>     
                    {{Form::hidden('_method','PUT')}}   
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