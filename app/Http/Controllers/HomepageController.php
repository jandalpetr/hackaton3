<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;
use App\Clients;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function alphabeticalSortClients(Request $request){

        if($request->input('name')){

            $name = $request->name;
            $search = "%".$name."%";
            $list = DB::table('clients')
            ->where('first_name', 'like', $search)
            ->get();
            
         }else{

            $list = Clients::orderBy('first_name', 'asc')->get();

        }
            return view('clients.index', compact('list'));
    }

    public function alphabeticalSortPets(Request $request){


      if($request->input('name')){

        $name = $request->name;
        $search = "%".$name."%";
        $list = DB::table('pets')
        ->where('name', 'like', $search)
        ->get();
    }else{
        $list = Pets::orderBy('name', 'asc')->get();
        }

        return view('/index', compact('list'));
    }


    public function show($id){
        $pet= Pets::findOrFail($id);
            $owner = clients::where('id', $pet->client_id)->first();

        return view('/show', compact('owner', 'pet'));
    }
}
