<?php

namespace App\Http\Controllers\Keys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keys;
use App\Models\Users;
use App\Models\TypeKeys;

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

        return view(
            'keys/register', 
            [
                'users' => Users::select(['id','name'])->where(['system'=>true])->get()->keyBy('id')->pluck('name')->toArray(),
                'keys' => $keys,
                'type_keys' => TypeKeys::select(['id','name'])->get()->keyBy('id')->pluck('name')->toArray()
            ]
        );
    }
}
