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

    public function editSoln($id)
    {
        $data = Solution::where(['s_id' => $id])->firstOrFail()->toArray();

        if($data)
        {
            return view('Solution.edit')->with(['data' => $data]);
        }
    }

    public function delete($id)
    {
        $delete = Solution::where(['s_id' => $id])->delete();

        if($delete)
        {
            session()->flash('message', 'Solution Deleted');

            return redirect()->back();
        }
    }

    public function editSolution(Request $request)
    {
        dd($request->all());
    }
}
