<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppMail;
use App\Services\MailAttachmentService;

class NoticeController extends Controller
{
    /**
     * @var MailAttachmentService
     */
    private $mailAttachmentService;

    public function __construct(MailAttachmentService $mailAttachmentService)
    {
        $this->mailAttachmentService = $mailAttachmentService;
    }

    public function index()
    {
        return view('notices.index');
    }

    public function mailMake()
    {
        return view('notices.mails.make');
    }

    public function mailConfirm(Request $request)
    {
        $postData = $request->all();
        
        if (isset($postData['file'])) {
            $postData['putFileInfo'] = $this->mailAttachmentService->saveFile($postData['file']);
        }

        $viewData = [
            'postData' => $postData
        ];

        return view('notices.mails.confirm', ['viewData' => $viewData]);
    }

    public function mailSend(Request $request)
    {
        $postData = $request->all();
        Mail::to('test@example')->send(new AppMail($postData));
        return redirect(route('notice.index'));
    }
}
