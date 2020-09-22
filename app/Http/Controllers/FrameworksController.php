<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrameworksController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.framworks.index');
    }
}
