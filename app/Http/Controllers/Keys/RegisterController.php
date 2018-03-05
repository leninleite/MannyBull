<?php

namespace App\Http\Controllers\Keys;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use App\Models\Keys;
use App\Models\Users;
use App\Models\TypeKeys;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $keys = new Keys;

        return view(
            'keys/register', 
            [
                'users' => Users::where(['system'=>true])->pluck('name','id'),
                'keys' => $keys,
                'type_keys' => TypeKeys::pluck('name','id')
            ]
        );
    }

    public function save(Request $request)
    {

        $request->request->add(['unique_id' => $this->generate_unique_id()]);
        $validator = $this->validator($request);

        if ($validator->fails())
        {
            return redirect('keys/register')->withErrors($validator)->withInput($request->all());
        }

        $keys = new Keys($request->all());

        if($keys->save()){
            return redirect('/keys/list')->with('status', 'System created with success.');
        }

        return redirect('keys/register')->with('status', 'Error, please talk with your system adminisrator.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'unique_id' => 'required|string',
            'type_id' => 'required|integer',
            'user_id' => 'required|integer',
            'key' => 'required|string',
        ]);
    }

    protected function generate_unique_id()
    {
        $unique_id = Hash::make(Auth::user()->email);
        if($this->check_exist_unique_id($unique_id)){
            $this->generate_unique_id();
        }

        return $unique_id;
    }

    protected function check_exist_unique_id($unique_id)
    {
        if(Keys::where('unique_id',$unique_id)->first()){
            return true;
        };
        return false;
    }



}
