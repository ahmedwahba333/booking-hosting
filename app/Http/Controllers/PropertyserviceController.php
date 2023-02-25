<?php

namespace App\Http\Controllers;

use App\Models\Propertyservice;
use Illuminate\Http\Request;

class PropertyserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyservices=Propertyservice::all();
        return view("proprtyservice.data",compact("propertyservices"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propertyservice  $propertyservice
     * @return \Illuminate\Http\Response
     */
    public function show(Propertyservice $propertyservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propertyservice  $propertyservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Propertyservice $propertyservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propertyservice  $propertyservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propertyservice $propertyservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propertyservice  $propertyservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propertyservice $propertyservice)
    {
        //
    }
}
