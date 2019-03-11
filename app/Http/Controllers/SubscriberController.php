<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request){
    	//return $request;
    	$this->validate($request, [
    		'EMAIL' => 'required|unique:subscribers',
    	]);

    	$sub = new Subscriber();
    	$sub->email = $request->EMAIL;
    	$sub->save();

    	Toastr::success('Now You a subscriber thanks :)', 'success');
    	return redirect()->route('welcome');
    }
}
