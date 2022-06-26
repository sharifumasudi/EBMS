<?php

namespace App\Http\Livewire\Problem;

use Livewire\Component;
use App\Models\Category;
use App\Models\Problem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ProblemCreate extends Component
{
    use WithFileUploads;

    public Category $category_model;
    public Problem $problem_model;

    public $category_id, $problem_description, $problem_image;

    public $catesData;

    protected $rules = [
        'category_id' => 'required',
        'problem_description' => 'required',
        'problem_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4048'
    ]; // Rules for the Input Fields

    protected $messages = [
        'category_id.required' => 'Category Must Be Selected',
        'problem_description.required' => 'Problem Descritpion is Required',
        'problem_image.mimes' => "Format Must be: jpg,jpeg,png,gif",
        'problem_image.max' => 'Image has Higher Size',
    ]; // Meassages For the Rules

    public function updated($field)
    {
        $this->validateOnly($field); // Real time validation
    }

    public function mount()
    {
        $this->category_model = $category_model ?? new Category();

        $this->catesData = json_encode($this->category_model->displayCategory(), true);

        $this->problem_model = $problem_model ?? new Problem();
    }

    public function saveProblem()
    {

        $validate = $this->validate();

        if($validate)
        {
            if($this->problem_image != null){

                $fileName = time().'_'.random_int(100000000,9900000000).'.'.$this->problem_image->getClientOriginalExtension();

                $file_path = Storage::disk('public')->put($this->problem_image, $fileName); // store file

                $mergedInputFields = array_merge([
                    'problem_image' => htmlspecialchars(trim($fileName))
                ], $this->fieldInput());

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
                $store_problem = $this->problem_model->createProblem($this->fieldInput());

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

    private function fieldInput()
    {
        return [
            'problem_description' => htmlspecialchars(trim(ucwords((string)$this->problem_description))),
            'category_id' => htmlspecialchars(trim($this->category_id)),
            'booker_id' => Auth::user()->id,
        ];
    }

    public function render()
    {
        return view('livewire.problem.problem-create');
    }
}
