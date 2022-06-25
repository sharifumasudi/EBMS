<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Support\Facades\Auth;

class ProblemController extends Controller
{
    public Problem $problem_model;

    public Solution $solution_model;

    public $problem_id;

    public function __construct()
    {
        $this->middleware('auth');

        $this->problem_model = $problem_model ?? new Problem();

        $this->solution_model = $solution_model ?? new Solution();

    }

    public function index()
    {
        return view('Problem.index');
    }

    public function create()
    {
        return view('Problem.create');
    }

    public function respond($id)
    {
        $get_data = $this->problem_model->where(['p_id' => $id])->firstOrFail()->toArray();

        // dd($get_data);

        $this->problem_id = $id;

        return view('Problem.response')->with(['get_data' => $get_data]);
    }

    public function store_soln(Request $request)
    {

        $validate = $this->validate($request, [
            'solution_descritpion' => 'required|max:200'
        ]);

        if($validate)
        {
            $data = [
                'problem_id' => (int)$request->id,

                'recorder' => htmlspecialchars(trim(ucwords(Auth::user()->name))),

                'solution_descritpion' => htmlspecialchars(trim(ucwords($request->solution_descritpion))),
            ];

            $stored = $this->solution_model->createSolution($data);

            if($stored)
            {
                session()->flash('message', 'Successfully Solution Saved');

                return redirect()->route('expert.problem.index');
            }
        }

    }
}
