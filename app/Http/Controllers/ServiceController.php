<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{    public function index()
    {
        //Model - singular
        //Service

        //Table - plular
        //Services

        $services = Service::all();

        return view('service.index', compact('services'));
    }

    public function store(){
        $data = request()->validate([
            'name'=> 'required|min:5|max:10'
        ]);
        Service::create($data);


        return redirect()->back();
    }
}
