<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesContorller extends Controller
{
    //
    public function About(){

    	$name='BAASA';

    	return view('about')->with('name', $name);
    }
    public function Contact(){
    	$name='BAASA';
    	return view('contact')->with('name', $name);
    }
}
