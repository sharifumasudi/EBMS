<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:administrator']);
    }

    public function index()
    {
        return view('Admin.dash');
    }

}
