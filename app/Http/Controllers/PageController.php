<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    private function validateComic($data) {
        $validator = Validator::make($data, [
            "title" => "required|min:5|max:100",
            "description" => "min:5|max:65535",
            "price" => "required|max:20",
            "sale_date" => "required|max:20",
            "series" => "min:5|max:20"
        ], [
            "title.required" => "Titolo mancante",
            "title.min" => "Titolo troppo corto, minimo :min caratteri",
            "title.max" => "Titolo troppo lungo, massimo :max caratteri",
        ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->except(['_token', '_method']);

        
        // $request->validate([
        //     "title" => "required|min:5|max:100",
        //     "description" => "min:5|max:65535",
        //     "price" => "required|max:20",
        //     "sale_date" => "required|max:20",
        //     "series" => "min:5|max:20"
        // ]);
        // $data = $request->all();

        $data = $this->validateComic( $request->all());
        
        $newComic = new Comic();
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->series = $data["series"];

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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        $data = $this->validateComic( $request->all());

        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = $data["price"];
        $comic->sale_date = $data["sale_date"];
        $comic->series = $data["series"];
        $comic->update();

        $comic->update($data);

        return redirect()->route("comics.show", $comic->id);
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
