<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.qa.index');
    }
}
