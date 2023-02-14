<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Actors;
use Illuminate\Http\Request;


class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Actors::first()->get();
        return Actors::first()->paginate(5);
    }

    public function getByTitle($value)
    {
        return Actors::where('title',$value)->get();
    }

    public function getById($id){
        return Actors::find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(Request $request)
    {
       Actors::create($request->all());
       return 'Done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actors  $Actors
     * @return \Illuminate\Http\Response
     */
    public function show(Actors $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actors $Actors)
    {
        Actors::where('id', $request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actors  $actors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actors = Actors::find($id);
        $actors->delete();
        return 'Done';

    }
}
