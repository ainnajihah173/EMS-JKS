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
        $datas = MRegistration::all();
        return view('manageMRegistration.viewMRegStaff', compact('datas'));
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

    //update status
    public function updateStatus($mRegistration)
    {
        $data = MRegistration::find($mRegistration);
        if ($data) {
            if ($data->mreg_status == "Draft") {
                $data->mreg_status = "Untuk Diluluskan"; 
                $data->save();
            }
        }
        return redirect()->route('manageMRegistration.index'); 
    }
    

    /**
     * Show Applicant Info for their Application and print
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
    public function edit($mregistration)
    {
        $data = MRegistration::with('applicant', 'spouse', 'wali', 'witness')->find($mregistration);
        return view('manageMRegistration.editAppApplicant', compact('data'));
    }

    /**
     * Update the Marriage Registration Form
     */
    public function update(Request $request, $mregistration)
    {
        $data = MRegistration::find($mregistration);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRegistration.index');
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
     * Delete Data
     */
    public function destroy($mregistration)
    {
        MRegistration::find($mregistration)->delete();
        return redirect()->route('manageMRegistration.index');
    }
}
