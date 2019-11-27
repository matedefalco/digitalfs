<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = Actor::all();

        return view('actores', compact('actores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actorsadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actor = new Actor();

        $actor->first_name = $request->first_name;
        $actor->last_name = $request->last_name;
        $actor->rating = $request->rating;

        $actor->save();
        return redirect('actores');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $actor = Actor::find($id);

      return view('actor', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor, $id)
    {
      $actor = Actor::find($id);

      return view('actoredit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
      $actor= Actor::find($actor->id);

      $actor->first_name = $request->first_name;
      dd($actor);
      $actor->last_name = $request->last_name;
      $actor->rating = $request->rating;

      $actor->save();
      return redirect('actores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
