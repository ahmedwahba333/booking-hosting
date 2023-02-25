<?php

namespace App\Http\Controllers;

use App\Models\Userproperty;
use Illuminate\Http\Request;
use App\Models\Item;

class UserpropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function userproperties(Request $request)
    // {
    //     // dd($request->all());
    //     Userproperty::create(['startDate' => $request["startDate"]]);
    //     Userproperty::create(['endDate' => $request["endDate"]]);
    //     Userproperty::create(['description' => $request["description"]]);
    //     // return redirect("allservice");
    // }

    public function create()
    {
        return view("createItem.UserProperties");
    }


    public function store(Request $request)
    {

        // dd($request->all());
        Userproperty::create([
            'startdate' => $request["startdate"],
            'enddate' => $request["enddate"],
            'description' => $request["description"]
        ]);
        return redirect("profile");
    }

    public function updateAccept(Request $request, Userproperty $items)
    {
        // dd($items);
        $items->update([
            'userstatus' => $request["userstatus"]
        ]);
        //dd($id);
        return redirect("UserProperties");
    }


    public function updateReject(Request $request, Userproperty $items)
    {
        // dd($request);
        $items->update([
            'userstatus' => $request["userstatus"]
        ]);
        // dd($items);
        return redirect("UserProperties");
    }


    // public function statusAccept()
    // {
    //     //dd($id);
    //     // $id->delete();
    //     Userproperty::create(['userstatus' => ['accept']]);
    // }
    // public function statusReject()
    // {
    //     //dd($id);
    //     // $id->delete();
    //     Userproperty::create(['userstatus' => ['reject']]);
    // }


    public function Userproperty()
    {
        $items = Userproperty::all();
        return view("dashboardOA.UserProperties", compact("items"));
    }
    public function profile()
    {
        $items = Userproperty::all();
        return view("ui.profile", compact("items"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userproperty  $userproperty
     * @return \Illuminate\Http\Response
     */
    public function show(Userproperty $userproperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userproperty  $userproperty
     * @return \Illuminate\Http\Response
     */
    public function edit(Userproperty $userproperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userproperty  $userproperty
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Userproperty $userproperty)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userproperty  $userproperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userproperty $userproperty)
    {
        //
    }
}
