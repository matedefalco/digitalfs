<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $peliculas = Movie::where('title', 'like', 'Avatar')->get();
      $peliculas = Movie::all();

      // $actores = [
      //   "Tom Cruise",
      //   "Sivester Stallone",
      //   "Michael Fox",
      //   "Irene Cara",
      //   "Kevin Bacon"
      // ];
      // $actores = [];
      //$vac = compact('peliculas');

      return view ('peliculas', compact('peliculas')); //Busca: /resources/views/peliculas.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //Resolver como traer los generos.
        return view('addmovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $rules = [
            "titulo" => "required|max:200",
            "genre" => "required",
        ];

        $messages = [
          "titulo.required" => "El campo :attribute es obligatorio.",
          "genre.required" => "No te olvides."
        ];

        $this->validate($req, $rules, $messages);

        $path = $req->file("image")->store('public/poster'); //Acá guarda en el file sistem
        $file = basename($path);

        $pelicula = new Movie;

        $pelicula->title = $req->titulo;
        $pelicula->awards = $req->awards;
        $pelicula->release_date = $req->release_date;
        $pelicula->rating = $req->rating;
        $pelicula->genre_id = $req->genre;
        $pelicula->length = $req->length;
        $pelicula->image = $file;

        // dd($req, $pelicula);
        $pelicula->save();

        return redirect('addmovie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $pelicula = Movie::find($id);
        $pelicula = Movie::find($id);

        return view('pelicula', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
