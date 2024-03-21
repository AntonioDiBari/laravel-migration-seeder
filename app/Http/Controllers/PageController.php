<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::whereDate("orario_partenza", now())->get();
        $trains = Train::all();
        return view("home", compact("trains"));
    }
}
