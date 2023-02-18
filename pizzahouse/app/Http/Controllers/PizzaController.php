<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index() {
    // get data from a database
    /*$pizzas = Pizza::all();*/
    /*$pizzas = Pizza::orderBy('name', 'desc')->get();*/
    $pizzas = Pizza::latest()->get();

    return view('pizzas', [
      'pizzas' => $pizzas,
      'name' =>  request('name'),
      'age' =>  request('age')
    ]);
  }

  public function show($id) {
    return view('details', ['id' => $id]);
  }
}
