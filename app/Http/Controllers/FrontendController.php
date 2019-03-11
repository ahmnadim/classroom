<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Course;
use App\Notifications\ContactToOwner;
use App\Post;
use App\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{
   
    public function welcome()
    {
        $teachers = Teacher::all();
        $courses = Course::latest()->get();
        return view('welcome', compact('courses','teachers'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function courses()
    {
        $teachers = Teacher::all();
        $courses = Course::latest()->get();
        return view('courses', compact('courses','teachers'));
    }

    public function courseDetails($id){
        // $courses = Course::where('id', $id)->get();
        // // echo "<pre>";
        // // print_r($courses);
        // // echo "</pre>";
        // return view('course-details',compact('courses'));
        $course = Course::find($id);
        $courses = Post::where('course_id', $id)->get();
        return view('course-details', compact('courses', 'course'));
    }

    public function contactWithTeacher(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $suport = $request->suemail;
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        

        Notification::route('mail', $suport)
            ->notify(new ContactToOwner($contact));

        Toastr::success('Your message sent thanks :)', 'success');
        return redirect()->back();
    }
   
}
