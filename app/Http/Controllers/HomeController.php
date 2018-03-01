<?php

namespace App\Http\Controllers;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;

class HomeController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		\LogActivity::addToLog( 'My Testing Add To Log.' );

//		dd( 'log insert successfully.' );

		return view( 'home' );
	}
}
