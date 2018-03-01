<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function register() {

		return view( 'clients/register' );
	}
}
