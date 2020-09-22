<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.discover.index');
    }
}
