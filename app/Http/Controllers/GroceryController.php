<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class GroceryController extends Controller{
    public function index(){
        return view('groceries.index');
    }

    public function create(){
        return view('groceries.create');
    }

    public function store(){
        return "Door de hersenen van deze kraai kan ik opslaan.";
    }

    public function edit(){
        return view('groceries.edit');
    }

    public function update(){
        return "Door de vermogens van deze kraai kan ik updaten.";
    }

    public function destroy(){
        return "Door de snavel van deze kraai kan ik verwijderen.";
    }
}
