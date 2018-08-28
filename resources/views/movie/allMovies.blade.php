<h1 class="my-4 text-center">Only 17 Movies <small><br />you must watch before die</small>  
</h1>

@include('inc/message')

<div class="row">
    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="col-lg-3 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="/movie/{{$movie->id}}"><img class="card-img-top" src="{{$movie->poster}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/movie/{{$movie->id}}">{{$movie->title}}</a>
                        </h4>
                        <p>{{$movie->director}}<small>{{$movie->year}}</small></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div> 
        @endforeach
    @endif
</div>

<div class="row clearfix">
    {{$movies->links()}}
</div>
