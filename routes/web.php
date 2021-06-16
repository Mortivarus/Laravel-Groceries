<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\GroceryController;


/*
//Possible way to auto-load data when loading URI

Route::get('/groceries', function(){
    return view('groceries.index', [
        'groceries'=> App\Models\Grocery::latest()->get()
    ]);
});

*/



Route::get('/', [GroceryController::class, 'index'])->name('groceries.index'); //Land on the index

Route::get('/groceries', [GroceryController::class, 'index'])->name('groceries.index'); //Land on the index

Route::get('/groceries/create', [GroceryController::class, 'create'])->name('groceries.create'); //Land on the 'create' page

Route::post('/groceries', [GroceryController::class, 'store'])->name('groceries.store'); //Send a POST request to add the item

Route::get('/groceries/{grocery}/edit', [GroceryController::class, 'edit'])->name('groceries.edit'); //Land on the 'edit' page of the right item 

Route::patch('/groceries/{grocery}', [GroceryController::class, 'update'])->name('groceries.update');

Route::delete('/groceries/{grocery}', [GroceryController::class, 'destroy'])->name('groceries.destroy');



