<?php

namespace App\Http\Controllers;
use App\Pets;
use App\Clients;
use Illuminate\Http\Request;

class PetController extends Controller
{
public function create($id){

    $client = Clients::FindOrFail($id);
   
    return view('dogs/create', compact('client'));


}
public function store(Request $request){
    $pet = new Pets;
   
        $pet->name = $request->input('name');
        $pet->client_id = $request->input('client_id');
        
        $pet->doctor_id = $request->input('doctor_id');
        $pet->breed = $request->input('breed');
        $pet->weight = $request->input('weight');
        
        $pet->save();
        session()->flash('success_message', 'The pet was successfully saved!');
        return redirect('/pet/' . $pet->id);

    }
    public function show($id){

        $pet = Pets::findOrFail($id);

        return view('/dogs/show', compact('pet'));


    }
    public function edit($id){

        $pet = Pets::findOrFail($id);

        return view('/dogs/edit', compact('pet'));

    }

}
