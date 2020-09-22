<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabasesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.databases.index');
    }
}
