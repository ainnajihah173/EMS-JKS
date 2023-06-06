<?php

namespace App\Http\Controllers;

use App\Models\MCard_Application;
use App\Http\Requests\StoreMCard_ApplicationRequest;
use App\Http\Requests\UpdateMCard_ApplicationRequest;

class MCardApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manageMCard.viewMCardApplicant');
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
    public function store(StoreMCard_ApplicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MCard_Application $mCard_Application)
    {
        return view('manageMCard.cardAppApplicant');
    }

    public function showApp(MCard_Application $mCard_Application)
    {
        return view('manageMCard.viewAppApplicant');
    }

    public function showPrint(MCard_Application $mCard_Application)
    {
        return view('manageMCard.printAppApplicant');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MCard_Application $mCard_Application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMCard_ApplicationRequest $request, MCard_Application $mCard_Application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MCard_Application $mCard_Application)
    {
        //
    }
}
