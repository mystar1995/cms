<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.design.index');
    }
}
