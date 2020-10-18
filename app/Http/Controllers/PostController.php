<?php


namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies')->with('movies',$movies);
    }

    public function show(Movie $movie){
        return view('movie')->with('movie',$movie);
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $movie = new Movie($request->all());
        $movie->save();
        return redirect()->back();
    }

    public function edit($id){
        $movie=Movie::findOrFail($id);
        return view('edit')->with('movie',$movie);
    }

    public function update(Request $request, Movie $movie){
        $movie->update($request->all());
        return redirect('/movies/'.$movie->id);
    }

    public function delete(Movie $movie){
        $movie->delete();
        return redirect()->back();
    }
}
