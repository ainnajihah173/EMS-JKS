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
     * Index page of Applicant.
     */
    public function index()
    {
        $datas = MCard::all();
        return view('manageMCard.viewMCardApplicant', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = MRegistration::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.cardAppApplicant', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::find($request->input('applicant_id'));
        $spouse = ApplicantDetail::find($request->input('spouse_id'));
        $mregistration = MRegistration::find($request->input('mregistration_id'));

        $destinationPath = 'uploads';
        if ($request->hasFile('mcard_ApplicantPhoto')) {
            $receiptFile = $request->file('mcard_ApplicantPhoto');
            $receiptPath = $receiptFile->getClientOriginalName();
            $receiptFile->move($destinationPath, $receiptPath);
        }

        if ($request->hasFile('mcard_SpousePhoto')) {
            $receiptFile1 = $request->file('mcard_SpousePhoto');
            $receiptPath1 = $receiptFile1->getClientOriginalName();
            $receiptFile1->move($destinationPath, $receiptPath1);
        }

        if ($request->hasFile('mcard_receipt')) {
            $receiptFile2 = $request->file('mcard_receipt');
            $receiptPath2 = $receiptFile2->getClientOriginalName();
            $receiptFile2->move($destinationPath, $receiptPath2);
        }

        $MCardCount = MCard::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'mregistration_id'=> $mregistration->id,
            'mcard_noApp' => 'MC' . date("Y") . sprintf("%'.05d\n", $MCardCount + 1),
            'mcard_ApplicantPhoto' => $receiptPath ?? "",
            'mcard_receipt' => $receiptPath2 ?? "",
            'mcard_SpousePhoto' => $receiptPath1 ?? "",
            'mcard_status' => "Draft"
        ]);

        MCard::create($request->all());

        return redirect()->route('manageMCard.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($mCard)
    {
        $data = MCard::with('applicant', 'spouse')->find($mCard);
        return view('manageMCard.editCardApplicant', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mcard)
    {
        $data = MCard::find($mcard);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        return redirect()->route('manageMCard.index');
    }

    public function showApp()
    {
        $data = MCard::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.viewAppApplicant', compact('data'));
    }

    public function showPrint()
    {
        $data = MCard::where('user_id', auth()->user()->id)->first();
        return view('manageMCard.printAppApplicant', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mCard)
    {
        //
    }



    /* STAFFF */

    public function indexStaff()
    {
        $datas = MCard::all();
        return view('manageMCard.viewMCardStaff', compact('datas'));
    }

    public function showAppStaff()
    {
        return view('manageMCard.viewAppStaff');
    }

    public function showCardStaff()
    {
        return view('manageMCard.viewCardStaff');
    }


    public function editStatus()
    {
        return view('manageMCard.editStatusStaff');
    }

    public function updateStatus(){

    }

}
