<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //all dovlaci sve podatke iz tabele genres
        $data = Genre::all();

        return view('genre.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|unique:genres,name_en|alpha',
            'name_sr' => 'nullable|unique:genres,name_sr|alpha'
        ]);
    

        //kod ispod se izvrsava u slucaju da je forma prosla validaciju

        //1. create
        //Genre::create(['name_en'=>'mistery', 'name_sr'=>'misterija']); 
        //2. istanca klase
        /*$g = new Genre;
        $g->name_en = 'mistery';
        $g->name_sr = 'misterija';
        $g->save();*/

        Genre::create($request->all()); 

        return redirect()->route('genre.index');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //$genre = Genre::find($request->input('id'))
    public function edit(Genre $genre)
    {
        //return view('genre.edit', ['genre'=>$genre]);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name_en' => [
                'required', 
                //'unique:genres,name_en', 
                Rule::unique('genres', 'name_en')->ignore($genre->id),
                'alpha'],
            'name_sr' => [
                'nullable', 
                //'unique:genres,name_sr', 
                Rule::unique('genres', 'name_sr')->ignore($genre->id),
                'alpha']
        ]);

        $genre->update($request->all());

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
