<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //ideja je da sort zanrova bude po abecedi
        $zanrovi = $film->genres; //OVO VRACA KOLEKCIJU moze odmah da se koristi za prolazak
        $upit = $film->genres(); //OVO VRACA UPIT
        $zanrovi2 = $upit->get(); //TEK SADA IMATE KOLEKCIJU ZA PROLAZAK

        $zanroviSort = $film->genres->sortBy('name'); //dozvoljeno je da se navedu vestacki atributi
        $upit = $film->genres()->orderBy('name'); //OVO NE MOZE JER NAME NEMA U BAZI
        $zanroviOreder = $film->genres()->orderBy('name_en')->get(); //ovo moze 



        //dd($film->genres);
        return view('film.show', ['film'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
