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
        dump(request()->all());
    }

    public function edit($id){
        $grocery = Grocery::find($id);

        return view('groceries.edit', compact('grocery'));
    }

    public function update($id){
        $grocery = Grocery::find($id);
    }

    public function destroy(){
        return "Door de snavel van deze kraai kan ik verwijderen.";
    }
}
