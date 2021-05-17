<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     **INDEX
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        // ->orderBy('title', 'desc')
        // ->get();
        return view ('movies.index', compact('movies'));
        // return view ('welcome', ['movies' => $movies]);
    }

    /**
     * Display a listing of the resource.
     *!HOMEPAGE
     * @return \Illuminate\Http\Response
    */
     
    public function home()
    {
        $movies = Movie::all();
        // ->orderBy('title', 'desc')
        // ->get();
        return view ('welcome', compact('movies'));
        // return view ('welcome', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     **CREATE
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     **STORE
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     **SHOW
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        
        return view('movies.show', compact('movie'));
        // return view ('welcome', ['movies' => $movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     **EDIT
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     **UPDATE
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
     **DESTROY
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
