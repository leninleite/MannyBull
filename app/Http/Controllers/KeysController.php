<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keys;

class KeysController extends BaseController {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function register() {
		$keys = new Keys;
		return view('keys/register', ['keys' => $keys ]);
	}
}
