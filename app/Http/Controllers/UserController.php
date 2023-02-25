<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User::where("role","customer")->get();
        return view("dashboardOA.useradmin", compact("Users"));
    }
    public function index2()
    {
        $Users = User::where("role","owner")->get();
        return view("dashboardOA.useradmin", compact("Users"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ui.reg");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect("home");
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name'=>$request['name'],
            'lastname'=>$request['lastname'],
            'nid'=>$request['nid'],
            'email'=>$request['email'],
            'role'=>$request['role'],
            'gender'=>$request['gender'],
            'phone'=>$request['phone'],
            'birthdate'=>$request['birthdate'],
            'email'=>$request['email'],
            'password'=>$request['password']

        ]);

        return redirect("useradmin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        return view("ui.editlogIn", ["data" => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     $id->update([

    //         'name'=>$request['name'],
    //         'lastname'=>$request['lastname'],
    //         'nid'=>$request['nid'],
    //         'email'=>$request['email'],
    //         'role'=>$request['role'],
    //         'gender'=>$request['gender'],
    //         'phone'=>$request['phone'],
    //         'birthdate'=>$request['birthdate'],
    //        'country'=>"Egypt",
    //      'city'=>"aswan",
    //       'street'=>'XX',
    //         'email'=>$request['email'],
    //         'password'=>$request['password']

    //     ]);
    //     return redirect("dashboardAdmin");
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function delete(User $id)
    {
        //dd($id);
        $id->delete();
        return redirect("useradmin");
        // $User = User::find($id);
    }
}
