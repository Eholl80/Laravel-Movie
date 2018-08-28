@extends('layouts.app')

@include('inc/message')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search OMDB</h5>
                <div class="card-body">
                    <form class="input-group form-search" id="search-by-title-form" onsubmit="return false;">  
                        <input type="text" id="t" name="t" class="form-control" placeholder="Search for...">
                        <input type="hidden" name="plot" value="short" />
                        <button id="search-by-title-button" type="button" class="btn-sm btn-primary">Search</button>
                      
                        <div class="hide" id="search-by-title-response">
                            <pre class="alert alert-success" style="margin-bottom: 0px; white-space: normal;"></pre>
                            <button id="addMovie">Add</button>
                        </div>
                    </form>
                </div>
            </div>
            <picture>
                <source media="(min-width: )" srcset="">
                <img src="" alt="">
            </picture>
            <div id="search_results"></div>

            <div class="card">
                <div class="card-header">{{ __('Add Movie') }}</div>

                <div class="card-body">
                {!! Form::open(['action' => 'MoviesController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title') }}
                        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('why', 'Why ?') }}
                        {{Form::textarea('why', '', ['class'=>'form-control', 'placeholder'=>'why ?'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('imdb_id', 'IMDB ID') }}
                        {{Form::text('imdb_id', '', ['class'=>'form-control', 'placeholder'=>'imdb_id'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('year', 'year') }}
                        {{Form::text('year', '', ['class'=>'form-control', 'placeholder'=>'year'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('poster', 'poster') }}
                        {{Form::text('poster', '', ['class'=>'form-control', 'placeholder'=>'poster'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('plot', 'plot') }}
                        {{Form::text('plot', '', ['class'=>'form-control', 'placeholder'=>'plot'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('writers', 'writers') }}
                        {{Form::text('writers', '', ['class'=>'form-control', 'placeholder'=>'writers'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('actors', 'actors') }}
                        {{Form::text('actors', '', ['class'=>'form-control', 'placeholder'=>'actors'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('director', 'director') }}
                        {{Form::text('director', '', ['class'=>'form-control', 'placeholder'=>'director'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('genre', 'genre') }}
                        {{Form::text('genre', '', ['class'=>'form-control', 'placeholder'=>'genre'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('runtime', 'runtime') }}
                        {{Form::text('runtime', '', ['class'=>'form-control', 'placeholder'=>'runtime'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('type', 'type') }}
                        {{Form::text('type', '', ['class'=>'form-control', 'placeholder'=>'type'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('production', 'production') }}
                        {{Form::text('production', '', ['class'=>'form-control', 'placeholder'=>'production'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('country', 'country') }}
                        {{Form::text('country', '', ['class'=>'form-control', 'placeholder'=>'country'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('Ratings', 'Ratings') }}
                        {{Form::text('Ratings', '', ['class'=>'form-control', 'placeholder'=>'Ratings'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('imdbRating', 'imdbRating') }}
                        {{Form::text('imdbRating', '', ['class'=>'form-control', 'placeholder'=>'imdbRating'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('imdbVotes', 'imdbVotes') }}
                        {{Form::text('imdbVotes', '', ['class'=>'form-control', 'placeholder'=>'imdbVotes'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('metascore', 'metascore') }}
                        {{Form::text('metascore', '', ['class'=>'form-control', 'placeholder'=>'metascore'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('country', 'country') }}
                        {{Form::text('country', '', ['class'=>'form-control', 'placeholder'=>'country'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('Awards', 'Awards') }}
                        {{Form::text('Awards', '', ['class'=>'form-control', 'placeholder'=>'Awards'])}} 
                    </div>
                    <div class="form-group">
                        {{Form::label('language', 'language') }}
                        {{Form::text('language', '', ['class'=>'form-control', 'placeholder'=>'language'])}} 
                    </div>    
                    <div class="form-group">
                        {{Form::label('Rated', 'Rated') }}
                        {{Form::text('Rated', '', ['class'=>'form-control', 'placeholder'=>'Rated'])}} 
                    </div>     
                    <div class="form-group">
                        {{Form::label('Released', 'Released') }}
                        {{Form::text('Released', '', ['class'=>'form-control', 'placeholder'=>'Released'])}} 
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