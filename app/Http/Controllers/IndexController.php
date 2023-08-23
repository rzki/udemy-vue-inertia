<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia('Index');
    }

    public function show()
    {
        return Inertia('Show');
    }
}
