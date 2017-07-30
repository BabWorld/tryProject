<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PreviewController extends Controller
{
    //
    public function about(){

    	$names=[];
    	$names['first']='BAASA';
    	$names['last']='VVU';

    	return view('about', $names);
    }
}
