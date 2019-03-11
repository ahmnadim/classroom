<?php

namespace App\Http\Controllers\Student;

use App\Assignment;
use App\Course;
use App\Course_Student;
use App\Http\Controllers\Controller;
use App\Post;
use App\Student;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function course()
    {
    	$student_id = Auth::guard('student')->id();
    	$courses = Student::find($student_id)->courses()->get();
    	return view('student.courses.courses', compact('courses'));
    }

    public function create()
    {
    	$courses = Course::latest()->get();
    	return view('student.courses.create', compact('courses'));
    }

     public function store(Request $request)
    {
    	$this->validate($request, [
    		'course' => 'required'
    	]);

    	$course_student = new Course_student();
    	$course = Course_student::all()->where('student_id', Auth::guard('student')->id());
    	foreach ($course as $value) {
    		if ($request->course == $value->course_id) {
    			Toastr::info('Course Already Added...', 'info');
        		return redirect()->route('student.courses');
    		}
    	}

    	$course_student->course_id = $request->course;
    	$course_student->student_id = Auth::guard('student')->id();

    	$course_student->save();

    	Toastr::success('Course Added Successfully...', 'success');
        return redirect()->route('student.courses');
    }

    public function assignment($id)
    {
    	$student_id = Auth::guard('student')->id();
		//courses = Student::find($student_id)->courses()->get();
    	// $teachers = array();
    	// foreach ($courses as $course) {

    	// 	$teachers[] = Course::find($course->id)->teacher()->get();
    	// }

    	$course = Course::find($id);
    	$teacher = Course::find($course->id)->teacher;

    	return view('student.assignment.assignment', compact('course', 'teacher'));
    }

    public function assignment_store(Request $request)
    {
    	$this->validate($request, [
    		'teacher' => 'required',
    		'course' => 'required',
    		'assignment' => 'required',
    	]);

    	$assignment = $request->file('assignment');
        $slug = str_slug($request->course);

       if (isset($assignment)) {

           $uniqueFileName = uniqid() . $assignment->getClientOriginalName();

		if (!Storage::disk('public')->exists('assignment')) {

                Storage::disk('public')->makeDirectory('assignment');
            }

        $request->file('assignment')->move(base_path() . '/public/assignment', $uniqueFileName);

       }else{
       		Toastr::info('Please Select Your Assignment.','info');
        	return redirect()->back();
       }

        $assignment = new Assignment();
        $assignment->student_id = Auth::guard('student')->id();
        $assignment->teacher = $request->teacher;
        $assignment->course = $request->course;
        $assignment->assignment = $uniqueFileName;
        $assignment->save();

        Toastr::success('Your Assignment Submited Successfully.','success');
        return redirect()->back();
    }

     public function assignment_index()
    {
    	$assignments = Assignment::latest()->where('student_id', Auth::guard('student')->id())->get();
    	
    	
    	return view('student.assignment.index', compact('assignments'));
    }

    public function posts()
    {
    	return view('student.courses.posts');
    }

    public function courseDetails($id){
        $course = Course::find($id);
        $courses = Post::where('course_id', $id)->get();
        return view('student.courses.course-details', compact('courses', 'course'));
    }
}
