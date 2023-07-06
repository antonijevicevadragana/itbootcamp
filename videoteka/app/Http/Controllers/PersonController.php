<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
//use Illuminate\Validation\Rule;



class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // za nazive glumaca jezik je samo engleski pa ne treba $locale = App::currentLocale();


        $data = Person::orderBy('name', 'asc')->orderBy('surname', 'ASC')->paginate(5);


        return view('person.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|alpha:people,name', //ne moze unique posto mozda postoji glumac/reditelj sa istim imenom 
            'surname' => 'required|alpha:people,surname',
            'b_date' => 'nullable:people,b_date'
            //kljuc mora da bude isti kao name u formi /create.blade da bi validacija radila
        ]);
        //ovaj kod ce se izvrsiti ako forma prodje validaciju
        Person::create($request->all());

        //pre redirecta treba da se ispise da je podatak upsesno sacuvan
        $request->session()->flash('alertType', 'success');
        $request->session()->flash('alertMsg', 'Successfully added.');


        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        
      



    //   SELECT * FROM people
// LEFT JOIN film_director ON person_id=people.id
// LEFT JOIN films on films.id = film_id;

        //dd($person->leftJoin('film_director', 'person_id', '=', 'people.id')->leftJoin('films', 'films.id', '=', 'film_id'));

        //dd($person);
    //    $person ->leftJoin('film_director', 'person_id', '=', 'people.id')->leftJoin('films', 'films.id', '=', 'film_id')->get();
    

  
   
    

    
      
        return view('person.show', ['person'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
        $request->validate([
            'name' => 'required|alpha:people,name', //ne moze unique posto mozda postoji glumac/reditelj sa istim imenom ili prezimenom
            'surname' => 'required|alpha:people,surname',
            'b_date' => 'nullable:people,b_date'
        ]);

        $person->update($request->all());

        $request->session()->flash('alertType', 'success');
        $request->session()->flash('alertMsg', 'Successfully updated.');

        return redirect()->route('person.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
        $person->delete();

        session()->flash('alertType', 'success');
        session()->flash('alertMsg', 'Successfully deleted.');

        return redirect()->route('person.index');
    }
}
