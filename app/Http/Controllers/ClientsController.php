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
    
            return view('clients/show', compact('client'));
    
    
        }
        public function edit($id){
    
            $client = Clients::findOrFail($id);
    
            return view('/clients/edit', compact('client'));
    
        }
       
}
