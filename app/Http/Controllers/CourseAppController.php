<?php

namespace App\Http\Controllers;

use App\Models\Course_App;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourse_AppRequest;
use App\Http\Requests\UpdateCourse_AppRequest;

class CourseAppController extends Controller
{
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMCourse.statusApplication');
    }

    public function indexStaff()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        return view('manageMCourse.searchListStaff');
    }

    //create function
    public function createApp()
    {
        
        $course = Course::all();
        $courseApp = Course_App::all();

        return view('manageMCourse.courseRegisteration')->with(['course'=>$course, 'courseApp' =>$courseApp]);;
    }

    public function createRegStaff(Course_App $courseApp)
    {
        return view('manageMCourse.registerApplicant');
    }

    //store function
    public function storeApp(Request $request)
    {
        Course_App:: create($request->all());
        return redirect()->route('manageMCourse.index');
    }
    
    public function storeRegStaff(Course_App $request)
    {
        //
    }

    //show function
    public function showDoc(Course_App $courseApp)
    {
        return view('manageMCourse.documentList');
    }
    public function showCert(Course_App $courseApp)
    {
        return view('manageMCourse.printCert');
    }
    public function showSlip(Course_App $courseApp)
    {
        return view('manageMCourse.printSlip');
    }
    public function showApp(Course_App $courseApp)
    {
        return view('manageMCourse.viewApplication');
    }
    public function showDocStaff(Course_App $courseApp)
    {
        return view('manageMCourse.documentListStaff');
    }
    public function showCertStaff(Course_App $courseApp)
    {
        return view('manageMCourse.printCertStaff');
    }
    public function showSlipStaff(Course_App $courseApp)
    {
        return view('manageMCourse.printSlipStaff');
    }
    public function showAppStaff(Course_App $courseApp)
    {
        return view('manageMCourse.viewAppStaff');
    }

    //edit function
    public function editApp(Course_App $courseApp)
    {
        return view('manageMCourse.editApplication');
    }
    public function editAppStaff(Course_App $courseApp)
    {
        return view('manageMCourse.editAppStaff');
    }
    public function editPostpone(Course_App $courseApp)
    {
        return view('manageMCourse.postponeCourse');
    }

    //destroy function
    public function destroyApp()
    {
       
    }

    public function destroyAppStaff()
    {
       
    }
    
    public function getLocDistrict()
    {
        $loc = Course::all();

        return $loc;

    }
    public function getAddress(Request $request)
    {
        $address = Course::table('courses')
        -> where('cou_id', $request->cou_locDistrict)
        ->get();

        if(count($address)>0){
            return response()->json($address);
        }

    }

    public function getDate(Request $request)
    {
        $date = Course::table('courses')
        -> where('cou_id', $request->cou_adress)
        ->get();

        if(count($date)>0){
            return response()->json($date);
        }

    }

}

