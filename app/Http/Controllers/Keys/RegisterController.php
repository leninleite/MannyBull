<?php

namespace App\Http\Controllers\Keys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keys;

class RegisterController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//		$this->middleware( 'auth' );
    }

    public function index()
    {
        $keys = new Keys;

        return view('keys/register', ['keys' => $keys]);
    }
}
