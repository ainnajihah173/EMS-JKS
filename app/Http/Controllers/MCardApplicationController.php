<?php

namespace App\Http\Controllers;
use App\Models\MCard;
use App\Http\Requests\StoreMCard_ApplicationRequest;
use App\Http\Requests\UpdateMCard_ApplicationRequest;
use App\Models\ApplicantDetail;
use App\Models\MRegistration;
use App\Models\Wali;
use App\Models\Witness;
use Illuminate\Http\Request;

class MCardApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manageMCard.viewMCardApplicant');
    }

    public function indexStaff()
    {
        return view('manageMCard.viewMCardStaff');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MCard $mCard)
    {
        $data = MCard::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.cardAppApplicant', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::create($request->applicant);
        $spouse = ApplicantDetail::create($request->spouse);
        $mregistration = MRegistration::create($request->mregistration);

        $MCardCount = MCard::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'mregistration_id'=> $mregistration->id,
            'mcard_noApp' => 'MC' . date("Y") . sprintf("%'.05d\n", $MCardCount + 1),
            'mcard_status' => "Draft"
        ]);

        MCard::create($request->all());

        return redirect()->route('manageMCard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MCard $mCard)
    {
        return view('manageMCard.cardAppApplicant');
    }

    public function showApp(MCard $mCard)
    {
        return view('manageMCard.viewAppApplicant');
    }

    public function showAppStaff(MCard $mCard)
    {
        return view('manageMCard.viewAppStaff');
    }

    public function showPrint(MCard $mCard)
    {
        return view('manageMCard.printAppApplicant');
    }
    public function showCardStaff(MCard $mCard)
    {
        return view('manageMCard.viewCardStaff');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MCard $mCard)
    {
        //
    }

    public function editStatus(MCard $mCard)
    {
        return view('manageMCard.editStatusStaff');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMCard_ApplicationRequest $request, MCard $mCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MCard $mCard_Application)
    {
        //
    }
}
