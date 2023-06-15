<?php

namespace App\Http\Controllers;

use App\Models\Course_App;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseAppController extends Controller
{
    // applicant kursus kahwin dashboard
    public function index()
    {
        //$mreg = MRegistration::with('user')->get() , , compact('mreg');

        $datas = Course_App::with('course')->paginate(15);
        return view('manageMCourse.statusApplication', compact('datas'));
    }

    //return register page
    public function createApp()
    {
        //array
        $courses = Course::All();
        // $courseApp = Course_App::All();
        return view('manageMCourse.courseRegisteration', compact('courses'));
    }

    //store function
    public function storeApp(Request $request)
    {
        // dd($request->all());
        $request->merge([
            'couApp_approveStatus' => "Draft"
        ]);
        Course_App::create($request->all());
        return redirect()->route('manageMCourse.index');
    }

    //return page edit app
    public function editApp($courseApp)
    {
        $courses = Course::all();
        $data = Course_App::with('course')->find($courseApp);
        return view('manageMCourse.editApplication', compact('data', 'courses'));
    }

    //update application course
    public function updateApp(Request $request, $courseApp)
    {
        $data = Course_App::find($courseApp);
        $data->update($request->all());
        return redirect()->route('manageMCourse.index');
    }


    //return page view/submit status
    public function showApp($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);
        // dd($data);

        return view('manageMCourse.viewApplication', compact('data'));
    }

    //change status from draft to hantar
    public function updateAppStatus(Request $request, $courseApp)
    {
        $data = Course_App::find($courseApp);
        if ($data) {
            $data->couApp_approveStatus = $request->couApp_approveStatus;
            if ($request->couApp_approveStatus == "Draft") {
                $data->couApp_approveStatus == "Hantar";
            }
            $data->save();
        }
        return redirect()->route('manageMCourse.index', compact('data'));
    }

    //delete kursus kahwin
    public function destroyApp($courseApp)
    {
        Course_App::find($courseApp)->delete();
        return redirect()->route('manageMCourse.index');
    }

    //return page view/ list document
    public function showDoc($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);
        // dd($data);

        return view('manageMCourse.documentList', compact('data'));
    }
    public function showDocTab()
    {
        return view('manageMCourse.documentList');
    }

    //return  page course slip 
    public function showSlip($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printSlip', compact('data'));
    }

    //show page certificate 
    public function showCert($courseApp)
    {
        $data = Course_App::with('course')->find($courseApp);

        return view('manageMCourse.printCert', compact('data'));
    }



    //return page staff
    public function indexStaff()
    {
        $courses = Course::All();
        $datas = Course_App::with('course')->paginate(15);
        return view('manageMCourse.searchListStaff', compact('datas','courses'));
    }

    // public function showList($courseApp)
    // {
    //     $request->merge([
    //         'couApp_approveStatus' => "Draft"
    //     ]);
        
    //     $data = Course_App::with('course')->find($courseApp);
    //     // dd($data);

    //     return view('manageMCourse.viewApplication', compact('data'));
    // }


    public function createRegStaff(Course_App $courseApp)
    {
        return view('manageMCourse.registerApplicant');
    }


    public function storeRegStaff(Course_App $request)
    {
        //
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
    public function editAppStaff(Course_App $courseApp)
    {
        return view('manageMCourse.editAppStaff');
    }
    public function editPostpone(Course_App $courseApp)
    {
        return view('manageMCourse.postponeCourse');
    }

    //destroy function
    // public function destroyApp()
    // {
    // }

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
            ->where('cou_id', $request->cou_locDistrict)
            ->get();

        if (count($address) > 0) {
            return response()->json($address);
        }
    }

    public function getDate(Request $request)
    {
        $date = Course::table('courses')
            ->where('cou_id', $request->cou_adress)
            ->get();

        if (count($date) > 0) {
            return response()->json($date);
        }
    }
}