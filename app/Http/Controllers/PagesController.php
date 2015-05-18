<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	  * PAGE VIEW
	  * ---------
	  * Display Homepage
	  *
	  **/
	public function index()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.home');
	
	}
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display About
	  *
	  **/
	public function about()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.about');
	
	}

}
