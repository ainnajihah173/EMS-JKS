<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MApplication;
use App\Http\Requests\MApplicationRequest;
use App\Http\Requests\UpdateMApplicationRequest;
use App\Models\ApplicantDetail;
use App\Models\Wali;
use App\Models\Witness;

class MApplicationController extends Controller
{
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');
        $datas = MApplication::all();
        return view('manageMRequest.statusRequest', compact('datas'));
    }

    //return page request form
    public function createRequestForm(Request $request)
    {
        $data = $request->category;
        return view('manageMRequest.regRequestApplication', compact('data'));
    }

    //store request form data
    public function store(Request $request)
    {
        $applicant = ApplicantDetail::create($request->applicant);
        $spouse = ApplicantDetail::create($request->spouse);
        $wali = Wali::create($request->wali);
        $witness = Witness::create($request->witness);

        $MAPPCount = MApplication::count();

        $request->merge([
            'user_id' => auth()->user()->id,
            'applicant_id' => $applicant->id,
            'spouse_id' => $spouse->id,
            'wali_id' => $wali->id,
            'witness_id' => $witness->id,
            'mapp_noApp' => 'MA' . date("Y") . sprintf("%'.05d\n", $MAPPCount + 1),
            'mapp_status' => "Draft"
        ]);

        MApplication::create($request->all());

        return redirect()->route('manageMRequest.statusRequest');
    }


    //return page borang permohonan
    public function showApp()
    {
        $data = MApplication::where('user_id', auth()->user()->id)->first();

        return view('manageMRequest.viewApplication', compact('data'));
    }

    //update status borang permohonan from draft to hantar
    public function updateStatus($mapplication)
    {
        $data = MApplication::find($mapplication);
        if ($data) {
            if ($data->mapp_status == "Draft") {
                $data->mapp_status = "Untuk Diluluskan";
                $data->save();
            }
        }
        return redirect()->route('manageMRequest.statusRequest');
    }

    //return page eidt borang permohonan
    public function editApp($mapplication)
    {
        $data = MApplication::with('applicant', 'spouse', 'wali', 'witness')->find($mapplication);
        return view('manageMRequest.editApplication', compact('data'));
    }

    //save data edit borang permohonan
    public function update(Request $request, $mapplication)
    {
        $data = MApplication::find($mapplication);
        $data->update($request->all());
        $data->applicant->update($request->applicant);
        $data->spouse->update($request->spouse);
        $data->wali->update($request->wali);
        $data->witness->update($request->witness);
        return redirect()->route('manageMRequest.statusRequest');
    }

    //padam borang permohonan
    public function destroy($mapplication)
    {
        MApplication::find($mapplication)->delete();
        return redirect()->route('manageMRequest.statusRequest');
    }



    public function indexStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.searchListStaff');
    }



    public function createRegStaff()
    {
        return view('manageMRequest.registerApplicant');
    }


    //store function

    public function storeRequestForm(MApplication $request)
    {
        //
    }
    public function storeRegStaff(MApplication $request)
    {
        //
    }

    public function showAppStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.viewAppStaff');
    }
    public function showHIV()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('');
    }

    public function showWakalah()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('');
    }


    public function editAppStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.editAppStaff');
    }
    public function editHIV()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.editHIVForm');
    }

    public function editWakalah()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.editWakalahForm');
    }



    public function destroyHIV()
    {
    }
    public function destroyWakalah()
    {
    }
}
