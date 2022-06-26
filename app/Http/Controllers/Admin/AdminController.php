<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:administrator']);
    }

    public function index()
    {
        return view('Admin.dash');
    }

    public function expertList()
    {
        $expert = User::whereRoleIs('expert')->get()->toArray();

        if($expert)
        {
            return view('Admin.expert')->with(['expert' => $expert]);
        }
        else
        {
            return;
        }
    }

    public function expertForm()
    {
        return view('Admin.add_expert');
    }


    public function registerExpert(Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|max:100|email',
            'phone' => 'required|max:14|unique:users',
        ]);

        if($validate)
        {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make(1234)
            ];

            if(is_array($data))
            {
                $storeUser = User::create($data);
                if($storeUser)
                {
                    $attachRole = $storeUser->attachRole('expert');

                    if($attachRole)
                    {
                        session()->flash('message', 'Expert Information Stored, Initial Password is 1234');

                        return redirect()->route('expert_list.index');
                    }
                }
            }
        }
    }


}
