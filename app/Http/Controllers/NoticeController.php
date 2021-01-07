<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('notices.index');
    }

    public function mail()
    {
        return view('notices.mail');
    }
}
