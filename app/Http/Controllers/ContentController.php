<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\ContentService;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    /**
     * @var ContentService
     */
    private $contentService;

    public function __construct(ContentService $contentService)
    {
        $this->contentService = $contentService;
    }

    /**
     * 投稿一覧の表示
     *
     * @return view contents.list
     */
    public function list()
    {
        $viewData = $this->contentService->getContentAll();
        return view('contents.list', ['viewData' => $viewData]);
    }

    public function save(ContentRequest $contentRequest)
    {
        $saveData = $contentRequest->all();
        $saveData['userId'] = Auth::id();

        $this->contentService->saveContent($saveData);
        return redirect(route('content.list'));
    }    
}
