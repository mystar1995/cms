<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.languages.index');
    }
}
