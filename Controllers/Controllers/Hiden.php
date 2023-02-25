<?php

namespace App\Http\Controllers;
use App\Models\Service;


use Illuminate\Http\Request;

class Hiden extends Controller
{
    public function index()
    {
        $service=Service::all();
        return view("newfolder.hiden",compact("service"));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Service::create(['name'=>$request["name"]]);
        return redirect("allservice");
    }

    public function delete(Service $id)
    {
        $id->delete();
        return redirect("allservice");
    }
}


