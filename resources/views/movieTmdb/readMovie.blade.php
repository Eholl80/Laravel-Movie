@extends('layouts.app')

@section('content')
    
    <!-- Page Content -->
    <div class="container">

            <div class="row">
      
              <!-- Post Content Column -->
              <div class="col-lg-8">
      
                <h1 class="mt-4">{{$movie['original_title']}}</h1>
                
                <p class="lead">
                    {{$movie['release_date']}} / {{$movie['runtime']}}
                </p>
                vote_average : {{$movie['vote_average']}} / vote_count : {{$movie['vote_count']}}
                popularity : {{$movie['popularity']}}
                <hr>

                <p>{{$movie['original_title']}} by <a href="#">{{$movie['original_title']}}</a></p>
                
                <hr>
                GENRE {{$movie['original_language']}}
      
                <img class="img-fluid rounded float-left pr-4" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/{{$movie['poster_path']}}" alt="">

                

                <!-- Post Content -->
                <h3>Plot</h3>
                <p class="lead">{{$movie['overview']}} </p>
      
                <blockquote class="blockquote">
                  <p class="mb-0">More about</p>
                  <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
      
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora
                   commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
      
                <hr>
               
                
      
                <!-- Comment with nested comments -->
                <div class="media mb-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      
                    <div class="media mt-4">
                      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                      <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </div>
      
                  </div>
                </div>
      
              </div>
      
              <!-- Sidebar Widgets Column -->
              <div class="col-md-4">
      
                <!-- Search Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Search</h5>
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
      
                <!-- Categories Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Categories</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                          <li>
                            <a href="#">Web Design</a>
                          </li>
                          <li>
                            <a href="#">HTML</a>
                          </li>
                          <li>
                            <a href="#">Freebies</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                          <li>
                            <a href="#">JavaScript</a>
                          </li>
                          <li>
                            <a href="#">CSS</a>
                          </li>
                          <li>
                            <a href="#">Tutorials</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Side Widget -->
                <div class="card my-4">
                  <h5 class="card-header">More</h5>
                  <div class="card-body">
                  </div>
                </div>
      
              </div>
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->
   
@endsection