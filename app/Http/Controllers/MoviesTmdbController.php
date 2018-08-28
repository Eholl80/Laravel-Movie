<?php

namespace App\Http\Controllers;
use Tmdb\Laravel\Facades\Tmdb; // optional for Laravel ≥5.5
use App\Movie;
use App\Comment;
use App\User;

class MoviesTmdbController extends controller{

    function show($id)
    {
        // returns information of a movie
        $movie = Tmdb::getMoviesApi()->getMovie($id);
        $comments = Comment::get();
        $user = User::get();
        
        return view('/movieTmdb.readMovie')->with('movie', $movie);
        //return $movie;
    }


}
