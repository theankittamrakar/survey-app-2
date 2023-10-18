<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HelloController extends Controller
{
    public function about()
    {


        return view('about');
    }
    public function services()
    {
        //Model - singular
        //Service

        //Table - plular
        //Services

        $services = Service::all();

        return view('services', ['services' => $services]);
    }
}
