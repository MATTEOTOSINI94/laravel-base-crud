<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $fumetti = Comic::all();
        return view('comics.index', ["fumetti"=>$fumetti]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $request->validate([
        'title'=>'required|min:5',
        'description'=>'required|min:20',
        'thumb'=>'required',
        'price'=>'required',
        'type'=>'required|min:3',
    ]);
        $data = $request->all();

        $newComics = new Comic();

        $newComics->title = $data["title"];
        $newComics->description=$data["description"];
        $newComics->thumb=$data["thumb"];
        $newComics->series=$data["series"];
        $newComics->price=str_replace(',','.',$data["price"]);
        $newComics->type=$data["type"];
        $newComics->save();
        dump($request);

        return redirect()->route("comics.show", $newComics->id)->with("msg","Fumetto Creato");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $fumetto = Comic::findOrFail($id);
       return view("comics.show",["fumetto"=>$fumetto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  user/{user}/edit
    public function edit($id)

    {
        $fumetto = Comic::findOrFail($id);
        return view("comics.edit", ["fumetto"=>$fumetto]);
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
        $request->validate([
            'title'=>'required|min:5',
            'description'=>'required|min:20',
            'thumb'=>'required',
            'price'=>'required',
            'type'=>'required|min:3',
        ]);
        
        $data = $request->all();
        $comic->update($data);
    
        return redirect()->route("comics.show",$comic->id)->with("msg","Fumetto modificato correttamente");
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

        return redirect()->route("comics.index")->with("msg","Eliminato Correttamente");
    }
}
