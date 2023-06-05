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
     * Show Applicant Info before go to mreg form
     */
    public function show(MRegistration $mRegistration)
    {
        return view('manageMRegistration.infoApplicant');
    }

    /**
     * Show Applicant Info for their Application
     */
    public function showApp(MRegistration $mRegistration)
    {
        return view('manageMRegistration.viewAppApplicant');
    }

    /**
     * Show Applicant Info for their Application
     */
    public function showPrint(MRegistration $mRegistration)
    {
        return view('manageMRegistration.printAppApplicant');
    }

    /**
     * Show Applicant Info for their cert
     */
    public function showCert(MRegistration $mRegistration)
    {
        return view('manageMRegistration.viewCertificateApplicant');
    }

    /**
     * Edit Registration Form
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
     * Delete Data
     */
    public function destroy(MRegistration $mRegistration)
    {
        //
    }
}
