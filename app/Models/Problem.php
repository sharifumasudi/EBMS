<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Problem extends Model
{
    use HasFactory;

    protected $table = 'problems';

    protected $primaryKey = 'p_id';

    protected $fillable = [
        'problem_description',
        'problem_image',
        'category_id',
        'booker_id',
        'status'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'booker_id');
    }

    public static function createProblem(array $data)
    {
        return self::create($data);
    }

    public static function displayProblem()
    {
        return DB::table('problems')
                ->join('categories', 'categories.id', '=', 'problems.category_id')
                ->join('users', 'users.id', '=', 'problems.booker_id')
                ->select('problems.*', 'users.phone', 'users.email', 'users.name', 'categories.category_name')
                ->orderBy('created_at', 'DESC')
                ->get()->toArray();
    }
}
