<?php

namespace App\Http\Controllers;

use App\Dog;

use Illuminate\Http\Request;

class DogsController extends Controller {

    public function index () {

        $dogs = Dog::all () -> sortByDesc ('score');

        return view ('index', ['dogs' => $dogs]);

    }
}
