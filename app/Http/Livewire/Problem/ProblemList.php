<?php

namespace App\Http\Livewire\Problem;

use Livewire\Component;

use App\Models\Problem;
use App\Models\Solution;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProblemList extends Component
{

    public Problem $problem_model;
    public Solution $solution_model;

    public $problemData; // Data To be Passed

    public $problem_id, $recorder,$solution_descritpion, $description;

    public $message;

    public function mount()
    {
        $this->problem_model = $problem_model ?? new Problem();

        $this->solution_model = $solution_model ?? new Solution();

        $this->problemData = json_encode($this->problem_model->displayProblem(), true);

    }

    public function respond($id)
    {
        $get_data = $this->problem_model->where(['p_id' => $id])->firstOrFail()->toArray();

        $this->problem_id = $id;

        $this->description = $get_data['problem_description'];

    }

    public function saveProblemSolution()
    {
        try{

            $validate = $this->validate([
                'solution_descritpion' => 'required|max:200',
            ]);

            if($validate)
            {
                $this->resetErrorBag();

                DB::beginTransaction();

                $stored = $this->solution_model->create($this->solutionsField());

                if($stored)
                {
                    sleep(2);

                    $this->resetInput();

                    DB::commit();

                    return redirect()->route('expert.problem.index');
                }
            }
        }catch(\Exception $e)
        {
            $this->message = $e->getMessage();
        }

    }

    public function resetInput()
    {
        $this->solution_descritpion = '';
    }

    private function solutionsField()
    {
        return [
            'problem_id' => (int)$this->problem_id,

            'recorder' => htmlspecialchars(trim(ucwords(Auth::user()->name))),

            'solution_descritpion' => htmlspecialchars(trim(ucwords($this->solution_descritpion))),
        ];
    }

    public function trash($id)
    {
        $delete = $this->problem_model->where(['p_id' => $id])->delete();

        if($delete)
        {
            session()->flash('message', 'Post Deleted');

            return redirect()->route('expert.problem.index');

        }
    }

    public function render()
    {
        // dd($this->problemData);
        return view('livewire.problem.problem-list');
    }
}
