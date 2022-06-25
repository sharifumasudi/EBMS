<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:expert']);
    }

    public function index()
    {
        return view('Expert.dash');
    }
}
