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

    public function show($id){
        $movie = Movie::findOrFail($id);
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
}
