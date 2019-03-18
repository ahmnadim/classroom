<?php

namespace App\Http\Controllers\Teacher;

use App\Attendance;
use App\Http\Controllers\Controller;
use App\Post;
use App\Student;
use App\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
    	
    	$posts = Post::latest()->get();
    	return view('teacher.home', compact('posts'));
    	
    }

    public function unauthorize(){

    	return view('teacher.unauthorized');
    }

    public function attandance()
    {
        $now = now();
        $month = date('n', strtotime($now));
        $year = date('Y', strtotime($now));
        $days_in_current_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        return view('teacher.attandance.index');
    }

    public function todays()
    {
        $students = Student::all();
        $attandance = Attendance::all();
        $now = now();
        $date = date('d-m-Y', strtotime($now));
       return view('teacher.attandance.todays', compact('students', 'attandance', 'date'));
    }

    public function attandance_add(Request $request, $id)
    {
        $now = now();
        $day = date('d', strtotime($now));
        $month = date('n', strtotime($now));
        $year = date('Y', strtotime($now));
        $date = date('d-m-Y', strtotime($now));

        $days_in_current_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
        $teacher = Teacher::find(Auth::user()->id);

        $duplicate = Attendance::where('student_id', $id)->where('date', $date)->get();
        foreach ($duplicate as $dup) {
            if ($dup->student_id == $id and $dup->date == $date) {
               Toastr::info('Attendance Already Given.', 'info');
                return redirect()->route('teacher.todays'); 
            }
        }

        $attend = new Attendance();
        $attend->student_id = $id;
        $attend->teacher_id = $teacher->id;
        $attend->date = $date;
        $attend->is_attend = 1;
        $attend->save();

        Toastr::success('Attendance Given Successfully.', 'success');
        return redirect()->route('teacher.todays');
       
    }

    public function attandance_remove(Request $request, $id)
    {        
        $attend = Attendance::where('student_id', $id)->get();
        foreach($attend as $at){
            $at->is_attend = 0;
            $at->save();
        }
        

        Toastr::success('Attendance Remove Successfully.', 'warning');
        return redirect()->route('teacher.todays');
    }
}

