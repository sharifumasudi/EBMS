<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'role:expert|administrator']);
    }

    public function index()
    {
        return view('Category.index');
    }

    public function create()
    {
        return view('Category.create');
    }
}
