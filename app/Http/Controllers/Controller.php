<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMConsultation.homepageMConsult');
    }

    public function addConsult()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMConsultation.addAppConsult');
    }


}
