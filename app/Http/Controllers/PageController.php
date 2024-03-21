<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::whereDate("orario_partenza", now())->get();
        $trains = Train::paginate(10);
        return view("home", compact("trains"));
    }
}
