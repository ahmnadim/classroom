<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\TeacherAuthNotify;
use App\Notifications\TeacherNotify;
use App\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('admin.teachers.teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:teachers',
            'password' => 'required|min:6'

        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->about = $request->about;
        $password = Hash::make($request->password);
        $teacher->password = $password;
        $teacher->save();
        $teacher->email;

        Notification::route('mail',$teacher->email)
                ->notify(new TeacherNotify($teacher));

        Toastr::success('Teacher Added!!!', 'success');
        return redirect()->route('admin.teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        Toastr::success('Teacher Deleted Successfully :)', 'success');
        return redirect()->route('admin.teachers.index');
    }

    public function auth($id)
    {
        $teacher = Teacher::find($id);
        $teacher->is_valid = 1;
        $teacher->save();
         Notification::route('mail',$teacher->email)
                ->notify(new TeacherAuthNotify($teacher));
        Toastr::success('Teacher Authorized Successfully :)', 'success');
        return redirect()->route('admin.teachers.index');
    }

    public function unauth($id)
    {
        $teacher = Teacher::find($id);
        $teacher->is_valid = 0;
        $teacher->save();
        Toastr::success('Teacher Unauthorized Successfully :)', 'success');
        return redirect()->route('admin.teachers.index');
    }
}
