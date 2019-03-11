<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Post;
use App\Teacher;
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
}
