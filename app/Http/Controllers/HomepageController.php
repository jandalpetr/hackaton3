<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pets;

class HomepageController extends Controller
{
    public function index(){



    }
    public function alphabeticalSort(){

        $list = Pets::orderBy('name', 'asc')->get();

        return view('/index', compact('list'));
    }
}
