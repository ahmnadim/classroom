<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('student.home');
    }
}
