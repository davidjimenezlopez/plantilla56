<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Hash;
use App\Http\Requests\StoreAdmins;
use App\Http\Requests\UpdateAdmins;

class AdminAdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        //
        $admins=Admin::all();
        return view('admins.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmins $request)
    {
        //
        $validated = $request->validated();


        $data=array(

            'name'=>$request->input('name'), 
            'email'=>$request->input('email') , 
            'password'=>Hash::make($request->input('password')),
            'rol'=>$request->input('rol')



        );

        $admin=Admin::create($data);

        return redirect()->route('admins.index')->with('message_store', true);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin=Admin::find($id);
        return view('admins.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmins $request, $id)
    {
        //
        
        
        
        $validated = $request->validated();


        $admin=Admin::find($id);

        if ($request->password) {
            $password= Hash::make($request->input('password'));
        } else {
            $password=$admin->password;
        }

        $data = array(
            'name' => $request->input('name'),
            'rol' => $request->input('rol'),
            'email' => $request->input('email'),           
            'password' =>$password,
        );

        $admin->update($data);
        
        return redirect()->route('admins.index')->with('message_update', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Admin::destroy($id);
         return redirect()->route('admins.index')->with('message_destroy', true);
    }
}
