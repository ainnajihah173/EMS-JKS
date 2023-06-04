<?php

namespace App\Http\Controllers;

use App\Models\MRegistration;
use App\Http\Requests\StoreMRegistrationRequest;
use App\Http\Requests\UpdateMRegistrationRequest;

class MRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRegistration.viewMRegApplicant');
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
    public function store(StoreMRegistrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MRegistration $mRegistration)
    {
        return view('manageMRegistration.infoApplicant');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MRegistration $mRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMRegistrationRequest $request, MRegistration $mRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MRegistration $mRegistration)
    {
        //
    }
}
