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
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display Case Studies
	  *
	  **/
	public function caseStudies()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.case-studies');
	
	}
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display Articles Page
	  *
	  **/
	public function articles()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.articles');
	
	}
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display Weddings
	  *
	  **/
	public function weddings()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.weddings');
	
	}
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display Portraits
	  *
	  **/
	public function portraits()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.portraits');
	
	}
	
	/**
	  * PAGE VIEW
	  * ---------
	  * Display Destinations
	  *
	  **/
	public function destinations()
	{
	
		/*PAGE INCLUDES*/
	
	
		/*DISPLAY PAGE*/
		return view('pages.destinations');
	}

}
