<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        @auth
            {!! Form::open(['action' =>'CommentsController@store', 'method' => 'POST']) !!}
        
            <div class="form-group">
                    {{Form::textarea('comment', '', ['class'=>'form-control', 'rows'=>'3'])}} 
                </div>    
            <div class="text-center">   
                {{Form::hidden('movieID',$movie->id)}}  
                {{Form::hidden('userID',Auth::user()->id)}}                  
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        @else
            Users must be registered and logged in to comment.
        @endauth
    </div>
</div>
