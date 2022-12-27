<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];
        $newComic->artists = $form_data['artists'];
        $newComic->writers = $form_data['writers'];
        $newComic->save();
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $form_data = $request->all();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];
        $comic->update();
        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}