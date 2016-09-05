<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GreetingController extends Controller
{
    public function hi($name = "miguel") {
        return 'Hola ' . ucfirst($name);
    }
}
