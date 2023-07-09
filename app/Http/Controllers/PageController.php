<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $social = config('social');
        $misc = config('misc.someLinks');
        $links = config('store.someLinks');
        return view("comics.index", compact('links', 'comics', 'misc', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $social = config('social');
        $misc = config('misc.someLinks');
        $links = config('store.someLinks');
        return view("comics.create", compact('links', 'misc', 'social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function show($id)
    public function show(Comic $comic)
    {
        // $comics = Comic::find($id);
        $social = config('social');
        $misc = config('misc.someLinks');
        $links = config('store.someLinks');
        return view("comics.show", compact('links', 'comic', 'misc', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $social = config('social');
        $misc = config('misc.someLinks');
        $links = config('store.someLinks');
        return view("comics.edit", compact('links', 'comic', 'misc', 'social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateComicRequest  $request
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $comic->fill($data);
        $comic->update();


        return to_route("comics.show", $comic);
        // return redirect()->route("comics.show", $comic); 
        // return view("comics.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
