<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AppMail;
use Illuminate\Support\Facades\Mail;

class NoticeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('notices.index');
    }

    public function mailMake()
    {
        return view('notices.mail.make');
    }

    public function mailConfirm(Request $request)
    {
        $postData = $request->all();
        $viewData = [
            'postData' => $postData
        ];

        return view('notices.mail.confirm', ['viewData' => $viewData]);
    }

    public function mailSend(Request $request)
    {
        $postData = $request->all();
        Mail::to('test@example')->send(new AppMail($postData));
        return redirect(route('notice.index'));
    }
}
