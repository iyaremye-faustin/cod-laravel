<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){

        $movies =   Movie::all();
        return view('welcome',compact('movies'));
    }
    public function newMoviePage()
    {
        $movies =  Movie::all()->sortByDesc('id');
        return view('newmovie',compact('movies'));
    }
    public function getMovies()
    {
        $movies =  Movie::all()->sortByDesc('id');
        return view('movies',compact('movies'));
    }

    public function newMovie(Request $request)
    {
        $rules=[
            "title"=>"string|required",
            "description"=>"string|required",
            "language"=>"string|required",
            "file"=>"required|mimes:jpg,jpeg,png|max:2048",
        ];
        $validateMessages=[
            'file.required'=>"Please upload a file with a valid type",
        ];
        $request->validate($rules,$validateMessages);
        $filename='poster'.strtotime(now()).'.'.$request->file->extension();
        $movie=new Movie();
        $movie->title=$request->title;
        $movie->language=$request->language;
        $movie->description=$request->description;
        $movie->poster=$filename;
        $movie->save();
        $request->file->move(public_path('uploads'), $filename);
        $movies =  Movie::all()->sortByDesc('id');
        return view('movies',compact('movies'));
    }

    public function getMovie(Request $request)
    {
        $movie = Movie::find($request->id);
        if(is_null($movie)){
            return redirect()->route('movies');
        }
        return view('movie_detail',compact('movie'));
    }
}
