<?php

namespace App\Http\Controllers;

use App\Models\MRegistration;
use App\Http\Requests\StoreMRegistrationRequest;
use App\Http\Requests\UpdateMRegistrationRequest;
use App\Models\ApplicantDetail;
use App\Models\Wali;
use App\Models\Witness;
use Illuminate\Http\Request;

class MRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = MRegistration::all();

        return view('manageMRegistration.viewMRegApplicant', compact('datas'));
    }

    public function indexStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRegistration.viewMRegStaff');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->category;
        return view('manageMRegistration.createAppApplicant', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::create($request->applicant);
        $spouse = ApplicantDetail::create($request->spouse);
        $wali = Wali::create($request->wali);
        $witness = Witness::create($request->witness);

        $MRegCount = MRegistration::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'wali_id' => $wali->id,
            'witness_id' => $witness->id,
            'mreg_noApp' => 'MR' . date("Y") . sprintf("%'.05d\n", $MRegCount + 1),
            'mreg_status' => "Draft"
        ]);

        MRegistration::create($request->all());

        return redirect()->route('manageMRegistration.index');
    }

    /**
     * Show Applicant Info before go to mreg form
     */
    public function show(MRegistration $mRegistration)
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.infoApplicant', compact('data'));
    }

    /**
     * Show Applicant Info for their Application
     */
    public function showApp()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.viewAppApplicant', compact('data'));
    }

    /**
     * Show Applicant Info for their Application
     */
    public function showPrint(MRegistration $mRegistration)
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMRegistration.printAppApplicant', compact('data'));
    }

    /**
     * Show Applicant Info for their cert
     */
    public function showCert(MRegistration $mRegistration)
    {
        return view('manageMRegistration.viewCertificateApplicant');
    }

    public function showCertStaff(MRegistration $mRegistration)
    {
        return view('manageMRegistration.viewCertificateStaff');
    }

    public function showAppStaff(MRegistration $mRegistration)
    {
        return view('manageMRegistration.viewAppStaff');
    }

    public function  printAppStaff(MRegistration $mRegistration)
    {
        return view('manageMRegistration.printAppStaff');
    }

    /**
     * Edit Registration Form
     */
    public function edit(MRegistration $mRegistration)
    {
        return view('manageMRegistration.editAppApplicant');
    }
    public function editStatus(MRegistration $mRegistration)
    {
        return view('manageMRegistration.editStatusStaff');
    }

    public function editApp(MRegistration $mRegistration)
    {
        return view('manageMRegistration.editMRegStaff');
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
        MRegistration::where('user_id', auth()->user()->id)->first()->delete();

        return response()->json(['success' => true]);
    }
}
