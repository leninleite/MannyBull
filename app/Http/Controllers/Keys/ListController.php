<?php

namespace App\Http\Controllers\Keys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Keys;

class ListController extends Controller
{
    public function index()
    {
        return view('keys/list', ['keys' => Keys::paginate(10)]);
    }
}
