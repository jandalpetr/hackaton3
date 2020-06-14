<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;


class ClientsController extends Controller
{
    public function create(){

        
    
        return view('clients.create');
    
    
    }
    public function store(Request $request){
       
        $client = new Clients;
        
            $client->first_name = $request->input('first_name');
            $client->surname = $request->input('surname');
            $client->address = $request->input('address');
            $client->email = $request->input('email');
            $client->phone = $request->input('phone');
            
            $client->save();
            
            return redirect('/client/' . $client->id);
    
        }
        public function show($id){
    
            $client = Clients::findOrFail($id);
            $dogs = Pets::where('client_id', $id)->get();
            return view('clients/show', compact('client','dogs'));
    
    
        }
        public function edit($id){
    
            $client = Clients::findOrFail($id);
    
            return view('/clients/edit', compact('client'));
    
        }
        
    
        public function update(Request $request, $id)
        {
            $client = Clients::findOrFail($id);
            $client->first_name = $request->input('first_name');
            $client->surname = $request->input('surname');
            $client->address = $request->input('address');
            $client->email = $request->input('email');
            $client->phone = $request->input('phone');
        
            $client->save();
    
            // flash success message (provide it to the next request)
            session()->flash('success_message', 'The publisher was successfully saved!');
    
            // redirect (to edit form, supplying the id of the client to be used in the URL)
            return redirect('/client/'.$client->id);
        }
}
