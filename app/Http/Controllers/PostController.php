<?php


namespace App\Http\Controllers;
use App\Http\Requests\SavePostRequest;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $tags = Tag::all();
        return view('create', compact('tags'));
    }

    public function save(SavePostRequest $request){
        $movie = new Movie($request->all());
        $movie->user_id = 1;
        $movie->save();
        $movie->tags()->attach($request->tags);
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
