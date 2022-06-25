<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;


class SolutionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Solution.index');
    }

    public function approve($id)
    {
        $data = [
            'approval' => 1
        ];

        $update = Solution::where(['s_id' => $id])->update($data);

        if($update)
        {
            session()->flash('message', 'Thanks, Solution Appreved');

            return redirect()->back();
        }
    }
}
