<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Solution extends Model
{
    use HasFactory;

    protected $table = 'solutions';

    protected $primaryKey = 's_id';

    protected $fillable = [

        'solution_descritpion',
        'problem_id',
        'recorder',
        'approval'

    ];

    public function problems()
    {
        return $this->belongsTo(Problem::class, 'problem_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function createSolution(array $data)
    {
        return self::create($data);
    }

    public static function displaySolution()
    {
        return DB::table('solutions')
        ->join('problems', 'problems.p_id', '=', 'solutions.problem_id')
        ->join('users', 'users.id', '=', 'problems.booker_id')
        ->select('problems.*', 'solutions.*', 'users.*')
        ->orderBy('solutions.created_at', 'DESC')
        ->get()->toArray();
    }
}
