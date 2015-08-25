<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StartController extends Controller {

	/**
	  * PAGE VIEW
	  * ---------
	  * Display The Start Your Adventure PAge
	  *
	  **/
	public function index()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.start.index');
	
	}

}
