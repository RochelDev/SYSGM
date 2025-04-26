<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
	    {
		    $usertype=Auth()->user()->usertype;

		    if($usertype=='user')
		    {
			    return view('users.index');
    		}
		    else if($usertype=='admin')
		    {
			    return redirect()->route('admindashboard');
    		}
		    else
		    {
			    return redirect()->back();
    	    }
	    }
    }

}
