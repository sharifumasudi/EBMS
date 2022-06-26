<?php

use App\Models\Problem;

if(! function_exists('getProblem'))
{
    function getProblem($user_ID)
    {
        $problem = Problem::where(['booker_id' => $user_ID])
                    ->join('categories', 'categories.id', '=', 'problems.category_id')
                    ->select('problems.*', 'categories.category_name')
                    ->get()->toArray();
        if($problem)
        {
            return $problem;
        }
    }
}

if(! function_exists('getSolutions'))
{
    function getSolutions($user_ID)
    {
        $problem = Problem::where(['booker_id' => $user_ID])
                    ->join('solutions', 'solutions.problem_id', '=', 'problems.p_id')
                    ->select('problems.*', 'solutions.*')
                    ->get()->toArray();
        if($problem)
        {
            return $problem;
        }
    }
}
?>
