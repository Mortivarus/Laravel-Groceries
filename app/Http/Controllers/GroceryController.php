<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroceryController extends Controller{
    public function index(){
        return "Door de ogen van deze kraai kan ik de index zien.";
    }

    public function create(){
        return "Door de vleugels van deze kraai kan ik maken.";
    }

    public function store(){
        return "Door de hersenen van deze kraai kan ik opslaan.";
    }

    public function edit(){
        return "Door het verstand van deze kraai kan ik aanpassen.";
    }

    public function update(){
        return "Door de vermogens van deze kraai kan ik updaten.";
    }

    public function destroy(){
        return "Door de snavel van deze kraai kan ik verwijderen.";
    }
}
