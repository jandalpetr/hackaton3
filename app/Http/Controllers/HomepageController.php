<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;

class HomepageController extends Controller
{
    public function index(){



    }
    public function alphabeticalSort(){

        $list = Pets::orderBy('name', 'asc')->get();
        
      
        return view('/index', compact('list'));
    }
    public function show($id){
        $pet= Pets::findOrFail($id);
            $owner = clients::where('id', $pet->client_id)->first();
       
        return view('/show', compact('owner', 'pet'));
    }
}
