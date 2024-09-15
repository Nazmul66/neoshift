<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function info_store(Request $request)
    {
        // dd($request->all());

        $information = new Information();

        $information->name          =   $request->name;
        $information->phone         =   $request->phone;
        $information->email         =   $request->email;
        $information->ip            =   $request->ip();
        $information->country_name  =   $request->country_name;
        $information->countryCode   =   $request->countryCode;
        $information->regionName    =   $request->regionName;
        $information->zipCode       =   $request->zipCode;
        $information->timezone      =   $request->timezone;

        $information->save();

        return redirect()->back();

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
