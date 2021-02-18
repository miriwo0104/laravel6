<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsTestController extends Controller
{
    public function index()
    {
        return view('js.index');
    }
}
