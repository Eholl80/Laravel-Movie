<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Movie;
use App\Comment;
use App\User;
use Auth;

class MoviesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'update', 'edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderby('created_at', 'asc')->paginate(8);

        return view('/pages.home')->with('movies', $movies);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/movie.createMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        //echo $user;

        $this->validate($request, [
            'title' => 'required',
            'imdb_id' => 'required',
            'year' => 'integer',
        ]);
        
        // Create Movie in DB
        $movie = new Movie;
        $movie->title = $request->input('title');
        $movie->why = $request->input('why');
        $movie->imdb_id = $request->input('imdb_id');
        $movie->year = $request->input('year');
        $movie->genre = $request->input('genre');
        $movie->director = $request->input('director');
        $movie->writers = $request->input('writers');
        $movie->actors = $request->input('actors');
        $movie->plot = $request->input('plot');
        $movie->poster = $request->input('poster');
        $movie->language = $request->input('language');
        $movie->metascore = $request->input('metascore');
        $movie->country = $request->input('country');
        $movie->production = $request->input('production');
        $movie->type = $request->input('type');
        $movie->runtime = $request->input('runtime');
        $movie->user_id = $user;
        //$movie->Ratings = $request->input('Ratings');
        $movie->Rated = $request->input('Rated');
        $movie->Awards = $request->input('Awards');
        $movie->Released = $request->input('Released');
        $movie->imdbRating = $request->input('imdbRating');
        $movie->imdbVotes = $request->input('imdbVotes');

        $movie->save();

        return redirect('/movie/create')->with('success','Movie Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        $comments = Comment::get();
        $user = User::get();


        return view('/movie.readMovie')
            ->with('movie',$movie)
            ->with('comments',$comments)
            ->with('user',$user);
        //return $movie;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        
        return view('/movie.editMovie')->with('movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'imdb_id' => 'required',
            'year' => 'integer',
        ]);

        // Update Movie in DB
        $movie = Movie::find($id);
        //$movie->user_id = $auth()->$user()->id;
        $movie->title = $request->input('title');
        $movie->why = $request->input('why');
        $movie->imdb_id = $request->input('imdb_id');
        $movie->year = $request->input('year');
        $movie->genre = $request->input('genre');
        $movie->director = $request->input('director');
        $movie->writers = $request->input('writers');
        $movie->actors = $request->input('actors');
        $movie->plot = $request->input('plot');
        $movie->poster = $request->input('poster');
        $movie->language = $request->input('language');
        $movie->metascore = $request->input('metascore');
        $movie->country = $request->input('country');
        $movie->production = $request->input('production');
        $movie->type = $request->input('type');
        $movie->runtime = $request->input('runtime');
        //$movie->Ratings = $request->input('Ratings');
        $movie->Rated = $request->input('Rated');
        $movie->Awards = $request->input('Awards');
        $movie->Released = $request->input('Released');
        $movie->imdbRating = $request->input('imdbRating');
        $movie->imdbVotes = $request->input('imdbVotes');

        $movie->save();

        return redirect()->back()->with('success','Movie Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movie')->with('success', 'Movie removed');
    }
}
