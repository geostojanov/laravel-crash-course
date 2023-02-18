<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index() {
    $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
      'name' =>  request('name'),
      'age' =>  request('age')
    ]);
  }

  public function show($id) {
    return view('pizzas.show', ['id' => $id]);
  }

  public function create() {
    return view('pizzas.create');
  }
}
