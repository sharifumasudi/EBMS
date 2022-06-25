<?php

namespace App\Http\Livewire\Solution;

use Livewire\Component;
use App\Models\Solution;

class SolutionList extends Component
{

    public Solution $soln_model;

    public $solnData;

    public function mount()
    {
        $this->soln_model = $soln_model ?? new Solution();

        $this->solnData = json_encode($this->soln_model->displaySolution(), true);
    }
    public function render()
    {
        return view('livewire.solution.solution-list');
    }
}
