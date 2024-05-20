<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

use App\Functions\Helper;

use App\Http\Requests\ComicRequest;

//Questo controller gestisce le operazioni CRUD sui comics

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        //ricevo da create i dati nel nuovo comic
        $data = $request->all();
        //creo un nuovo oggetto comic
        $newProduct = new Comic();
        $newProduct->title = $data['title'];
        $newProduct->description = $data['description'];
        $newProduct->thumb = $data['thumb'];
        $newProduct->price = $data['price'];
        $newProduct->series = $data['series'];
        $newProduct->sale_date = $data['sale_date'];
        $newProduct->type = $data['type'];
        $newProduct->artists = $data['artists'];
        $newProduct->writers = $data['writers'];
        $newProduct->slug = Helper::generateSlug($newProduct->title, new Comic());
        $newProduct->save();
        return redirect()->route('comics.show', $newProduct);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic')); //il compact vuole dire che passo alla view la variabile $comic e bisgona inserirlo quando si chiama la view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic) //il primo Comic si rifà al model, il secondo comic è la variabile
    {
        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->except('_token', '_method');

        //genero lo slug solo se il titolo è diverso
        if ($data['title'] === $comic->title) {
            $data['slug'] = $comic->slug;
        } else {
            $data['slug'] = Helper::generateSlug($data['title'], new Comic());
        }

        //aggiorno il comic
        $comic
            ->fill($data); //fill è un metodo che riempie i campi del model con i dati passati in questo caso con $data
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete_message', $comic->title);
    }
}
