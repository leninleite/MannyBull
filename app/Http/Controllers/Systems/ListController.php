<?php

namespace App\Http\Controllers\Systems;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class ListController extends Controller
{

    public function index()
    {
        return view('systems/list', ['users' => Users::where(['system'=> true])->paginate(10)]);
    }
}
