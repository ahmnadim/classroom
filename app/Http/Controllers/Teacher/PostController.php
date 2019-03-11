<?php

namespace App\Http\Controllers\Teacher;

use App\Course;
use App\Http\Controllers\Controller;
use App\Post;
use App\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('teacher_id', Auth::user()->id)->get();
        return view('teacher.post.create', compact('courses'));
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
            'title'=>'required|string|unique:posts',
            'image'=>'required',
            'body'=>'required',
            'course_id' => 'required',
            'course_link' => 'required'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);

       if (isset($image)) {

           $currentDate = Carbon::now()->toDateString();
           $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();


               if (!Storage::disk('public')->exists('post')) {

                   Storage::disk('public')->makeDirectory('post');
               }

               $postImage = Image::make($image)->resize(262,470)->stream();

               Storage::disk('public')->put('post/'.$imageName, $postImage);

       }else{
            $imageName = 'default.png';
        }

        $post = new Post();
        $post->teacher_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->course_id = $request->course_id;
        $post->course_link = $request->course_link;
        $post->body = $request->body;
        $post->save();

        $post->courses()->attach($request->course);

        Toastr::success('Your Post is Posted Successfully.','success');
        return redirect()->back();
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
        //
    }
}
