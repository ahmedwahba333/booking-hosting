<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Service;
use App\Models\Propertyimg;
use App\Models\Propertyservice;
use Illuminate\Http\Request;


class PropertyController extends Controller
{


// public function getservice(){
//     $services=Service::all();
//     dd($services);
// }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $services = Service::all();
        $properties =Property::all();
        //dd($services);
        return view("dashboardOA.propertiesowner",compact("properties","services"));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::all();

        return view("dashboardOA.propertiesowner", compact("properties"));
       
    }

    public function creatett()
    {
        $properties = Property::all();

        return view("dashboardOA.flatadmin", compact("properties"));
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeproperty(Request $request)
    {

        //dd($request['id']);

        $property =  Property::create([
            'country' => $request['country'],
            'city' => $request['city'],
            'street' => $request['street'],
            'capacity' => $request['capacity'],
            'price' => $request['price'],
            'isavailable' => $request['isavailable'],
            'user_id'=> auth()->id()
        ]);
        foreach ($request->imgs as $img) {
            $img->storeAs("public/imgs", $img->getClientOriginalName());
            Propertyimg::create([
                'properties_id' => $property['id'],
                'image' => $img->getClientOriginalName()
            ]);

           // dd($request) ;
        }

            foreach ($request["services"] as $img) {

                Propertyservice::create([
                    'services_id' => $img,
                    "properties_id"=>$property["id"]
                ]);
            }






        return redirect("propertiesowner");
    }


    /**
     * Display the specified resource.
     *
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $property->show();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $id)
    {

        return view("dashboardOA.propertydashedit", ["data" => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $id)
    {
        foreach ($request->imgs as $img) {
            $img->storeAs("public/imgs", $img->getClientOriginalName());
            Propertyimg::create([
                'properties_id' => $id['id'],
                'image' => $img->getClientOriginalName()
            ]);
        }

        $id->update([
            'country' => $request['country'],
            'city' => $request['city'],
            'street' => $request['street'],
            'capacity' => $request['capacity'],
            'price' => $request['price'],
            'isavailable' => $request['isavailable']
        ]);

        return redirect("addproperty");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function delete(Property $id)
    {
        $id->delete();
        return back();
    }

    // marina
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexB()
    {

         $Property= Property::where("price",">",0)->get();

        return view("ui.BookingGallery", compact("Property"));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addproperty(Property $id)
    {
      return view("ui.hosting",["data"=>$id]);
    }

    public function addpropertyone(Property $id)
    {


        return view("ui.bookingforone",["data"=>$id]);
    }
    public function addpropertygroup(Property $id)
    {


        return view("ui.bookingforsharing",["data"=>$id]);
    }



//Hosting gallery page


  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexH()
    {

         $Property= Property  ::where("price","=",0)->get();

        return view("ui.HostingGallary", compact("Property"));
    }

















    //marina










}


























