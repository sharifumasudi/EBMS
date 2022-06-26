<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function saveProblem(Request $request)
    {
        $validate = $this->validate($request,[
            'category_id' => 'required',
            'problem_description' => 'required',
            'problem_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4048'
        ],
        [
            'category_id.required' => 'Category Must Be Selected',
            'problem_description.required' => 'Problem Descritpion is Required',
            'problem_image.mimes' => "Format Must be: jpg,jpeg,png,gif",
            'problem_image.max' => 'Image has Higher Size',
        ]);


        if($validate)
        {
            $data = [
                'problem_description' => htmlspecialchars(trim(ucwords((string)$request->problem_description))),
                'category_id' => htmlspecialchars(trim($request->category_id)),
                'booker_id' => Auth::user()->id,
            ];

            if($request->problem_image != null){

                $fileName = time().'_'.random_int(100000000,9900000000).'.'.$request->problem_image->getClientOriginalExtension();

                $file_path = $request->problem_image->storeAs('problems', $fileName, 'public');


                $mergedInputFields = array_merge([
                    'problem_image' => htmlspecialchars(trim($fileName))
                ], $data);

                if($file_path)
                {
                    // if Image selected
                    DB::beginTransaction();

                    $store_problem = $this->problem_model->createProblem($mergedInputFields);

                    if($store_problem)
                    {
                        DB::commit();

                        sleep(2);

                        session()->flash('message', 'Successfully Problem Information Sent!');

                        return redirect()->route('user.problem.index');
                    }
                }

            }else{

                // if Post has No Image Uploaded
                $store_problem = $this->problem_model->createProblem($data);

                if($store_problem)
                {
                    DB::commit();

                    sleep(2);

                    session()->flash('message', 'Successfully Problem Information Sent!');

                    return redirect()->route('user.problem.index');
                }
            }
        }
        else
        {
            return;
        }
    }

}
