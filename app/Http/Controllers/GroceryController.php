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
        request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|numeric:integer|min:1',
            'price' => 'required|numeric'
        ]);

        Grocery::create([
            'name' => request('name'),
            'number' => request('number'),
            'price' => request('price')
        ]);

        return view('groceries.index');
    }

    public function edit(Grocery $grocery){
        
        return view('groceries.edit', compact('grocery'));
    }

    public function update(Grocery $grocery){

        request()->validate([
            'name' => 'required',
            'number' => 'required',
            'price' => 'required'
        ]);

        $grocery->update([
            'name' => request('name'),
            'number' => request('number'),
            'price' => request('price')
        ]);

        return view('groceries.index');
    }

    public function destroy(Grocery $grocery){
        $grocery->delete();
        return view('groceries.index');
    }
}
