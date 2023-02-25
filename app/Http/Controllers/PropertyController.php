<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Service;
use App\Models\Propertyimg;
use App\Models\Propertyservice;
use Illuminate\Http\Request;


class PropertyController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $services = Service::all();
        $properties = Property::all();
        //dd($services);
        // return view("ui.dashboardOwner",compact("properties","services"));
        return view("dashboardOA.propertiesowner", compact("properties", "services"));
    }

    public function index4()
    {
        $services = Service::all();
        $properties = Property::all();
        //dd($services);
        // return view("ui.dashboardOwner",compact("properties","services"));
        return view("dashboardOA.propertydashadd", compact("properties", "services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(auth()->user());
        $properties = auth()->user()->Property;
        // return view("ui.dashboardOwner", compact("properties"));
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


    public function requestadmin()
    {
        $items = Property::all();
        return view("dashboardOA.requestadmin", compact("items"));
    }


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
            'user_id' => auth()->id()
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
                "properties_id" => $property["id"]
            ]);
        }

        // return redirect("dashboardOwner");
        return redirect("addproperty");
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

        // return view("ui.dashboardOwneredit", ["data" => $id]);
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


        $id->update([
            'country' => $request['country'],
            'city' => $request['city'],
            'street' => $request['street'],
            'capacity' => $request['capacity'],
            'price' => $request['price']
            // 'isavailable' => $request['isavailable']
        ]);

        foreach ($id->Propertyimg as $img) {
            $img->delete();
        }
        foreach ($request->imgs as $img) {
            $img->storeAs("public/imgs", $img->getClientOriginalName());
            Propertyimg::create([
                'properties_id' => $id['id'],
                'image' => $img->getClientOriginalName()
            ]);
        }


        // return redirect("dashboardOwner");
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
        // "capacity", ">", 0, "ANd",

        $Property = Property::where( "price", ">", 0)->get();

        return view("ui.BookingGallery", compact("Property"));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addpropertyhost(Property $id)
    {
        return view("ui.hosting", ["data" => $id]);
    }

    // public function addpropertyone(Property $id)
    // {


    //     return view("ui.bookingforone",["data"=>$id]);
    // }
    public function addpropertygroup(Property $id)
    {

        return view("ui.bookingforsharing", ["data" => $id]);
    }



    //Hosting gallery page


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexH()
    {

        $Property = Property::where("price", "=", 0)->get();

        return view("ui.HostingGallary", compact("Property"));
    }
















    public function updateAccept(Request $request,Property $items)
    {
        // dd($items);
        $items->update([
            'isavailable' => $request['isavailable']
        ]);



        return back();
    }


    public function updateReject( Request $request,Property $items)
    {
        // dd($request);
        $items->update([
            'isavailable' => $request['isavailable']
        ]);
        // dd($items);
        return redirect("requestadmin");
    }


    public function updateDelete( Property $items)
    {
        // dd($request);
        $items->delete();
        // dd($items);
        return redirect("requestadmin");
    }
}
