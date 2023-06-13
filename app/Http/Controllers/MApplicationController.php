<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MApplication;
use App\Http\Requests\MApplicationRequest;
use App\Http\Requests\UpdateMApplicationRequest;

class MApplicationController extends Controller
{
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.statusRequest');
    }

    public function indexStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.searchListStaff');
    }

//create function
    public function createRequestForm()
    {
        return view('manageMRequest.regRequestApplication');
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

    //show function
    public function showApp()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.viewApplication');
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

    //edit function
    public function editApp()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMRequest.editApplication');
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

    //delete function
    public function destroyApp()
    {

    }

    public function destroyHIV()
    {
        
    }
    public function destroyWakalah()
    {
        
    }
    


}
