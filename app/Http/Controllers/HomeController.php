<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Travel;

class HomeController extends Controller
{
    function index(){

        $travel = Travel::all();

        return view("home.index", compact('travel'));
    }
}
