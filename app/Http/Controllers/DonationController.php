<?php

namespace App\Http\Controllers;

use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
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


    public function store(Request $req){


        $req->validate([
            'money'=>'required',
            'name'=>'required',
            'number'=>'required',
            'Mtime'=>'required',
            'Ytime'=>'required',
            'lock'=>'required',
        ]);

        $donation=new donation;
        $donation->id=$req->id;
        $donation->money=$req->money;
        $donation->name=$req->name;
        $donation->number=$req->number;
        $donation->Mtime=$req->Mtime;
        $donation->Ytime=$req->Ytime;
        $donation->lock=$req->lock;
        $donation->save();
        return view('user.welcome');

    }



    public function index()
    {
        $d=donation::all();
        return view('donations',compact('d'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(donation $donation)
    {
        //
    }
}
