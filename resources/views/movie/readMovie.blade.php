@extends('layouts.app')

@section('content')
    
    <!-- Page Content -->
    <div class="container">

            <div class="row">
      
              <!-- Post Content Column -->
              <div class="col-lg-8">
      
                <h1 class="mt-4">{{$movie->title}}</h1>
                
                <p class="lead">
                    {{ $movie->year }} / {{ $movie->director }}
                </p>
      
                <hr>
      
                <!-- Author -->
                @auth
                  @if(Auth::user()->is_admin)
                    <a href="/movie/{{$movie->id}}/edit" class="btn btn-primary ml-2 float-right">Edit</a>
                    {!! Form::open(['action' => ['MoviesController@destroy', $movie->id], 'method' => 'POST']) !!}
                        {{Form::hidden('_method','DELETE')}} 
                        {{Form::submit('Delete',['class'=>'btn btn-danger float-right'])}}
                    {!!Form::close() !!}
                  @endif
                @endauth

                <p>{{$movie->created_at}} by <a href="#">{{ $movie->user->name }}</a></p>
                
                <hr>
      
                <img class="img-fluid rounded float-left pr-4" src="{{$movie->poster}}" alt="">

                <h3>Why this one ?</h3>
                <p class="lead">{{$movie->why}}</p>

                <!-- Post Content -->
                <h3>Plot</h3>
                <p class="lead">{{$movie->plot}}</p>
      
                <blockquote class="blockquote">
                  <p class="mb-0">Featured Crew</p>
                  <footer class="blockquote-footer">Actors //
                    <cite title="Source Title">{{$movie->actors}}</cite>
                  </footer>
                  <footer class="blockquote-footer">Writers //
                      <cite title="Source Title">{{$movie->writers}}</cite>
                  </footer>
                </blockquote>
      
                <hr>
               
                @if(count($comments) > 0)
                  @foreach ($movie->comments as $comment) 
                    
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                          <h5 class="mt-0">{{$comment->user->name}}</h5>
                          {{$comment->comment}}
                        </div>
                    </div>
                  @endforeach        
                @endif
                @include('comment.comment')
      
              </div>
      
              <!-- Sidebar Widgets Column -->
              <div class="col-md-4"> 
                
                <div class="card my-4">
                    <h5 class="card-header">Score</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                              <ul class="list-unstyled mb-0">
                                  <li>Metascore
                                    <div class="pieChart" data-donutty
                                        data-radius=20
                                        data-thickness=10
                                        data-circle=false
                                        data-padding=0
                                        data-round=true
                                        data-color="aquamarine"
                                        data-value={{$movie->metascore}}>   
                                      <span>{{$movie->metascore}}</span>                             
                                    </div>
                                  </li>
                              </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>Imdb Rating
                                        <div class="pieChart" data-donutty
                                            data-radius=20
                                            data-thickness=10
                                            data-circle=false
                                            data-padding=0
                                            data-round=true
                                            data-color="lightcoral"
                                            data-max=10
                                            data-value={{$movie->imdbRating}}>   
                                          <span>{{$movie->imdbRating}}</span>                             
                                        </div>
                                      </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Imdb votes : {{$movie->imdbVotes}} -->
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Genre</h5>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li>
                          {{$movie->genre}}
                        </li>
                      </ul>
                  </div>
                </div>
      
                <!-- Side Widget -->
                <div class="card my-4">
                  <h5 class="card-header">More</h5>
                  <div class="card-body">
                      <ul class="list-unstyled mb-0">        
                        <li>
                          <strong>Runtime :</strong> {{$movie->runtime}}
                        </li>
                        <li>
                            <strong>Released :</strong> {{$movie->Released}}
                        </li>
                        <li>
                            <strong>Rated :</strong> {{$movie->Rated}}
                        </li>
                        <li>
                            <strong>Awards :</strong> {{$movie->Awards}}
                        </li>
                        <li>
                            <strong>Country :</strong> {{$movie->country}}
                        </li>
                        <li>
                            <strong>Language :</strong> {{$movie->language}}
                        </li>
                      </ul>
                  </div>
                </div>
      
              </div>
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->
   
@endsection