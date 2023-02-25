<?php

namespace App\Http\Controllers;

use App\Models\Propertyimg;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $property = Property::all();
        return view("ui.dashboardOwner", compact("property"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->img->storeAs("public/imgs", $request->img->getClientOriginalName());
        Property::create([
            'properties_id' => $request['properties_id'],
            'image' => $request->img->getClientOriginalName()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propertyimg  $propertyimg
     * @return \Illuminate\Http\Response
     */
    public function show(Propertyimg $propertyimg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propertyimg  $propertyimg
     * @return \Illuminate\Http\Response
     */
    public function edit(Propertyimg $propertyimg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propertyimg  $propertyimg
     * @return \Illuminate\Http\Response
     */
    public function a(Request $request, Propertyimg $propertyimg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propertyimg  $propertyimg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propertyimg $propertyimg)
    {
    }


    //marina
    public function indexB()
    {
        $Propertyimage= Propertyimg::all();
        return view("ui.BookingGallery", compact("Propertyimage"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createB()
    {
        return view("ui.BookingGallery");
    }
    //marina
}
