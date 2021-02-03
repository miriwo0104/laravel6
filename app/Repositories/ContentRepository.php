<?php

namespace App\Repositories;

use App\Repositories\ContentRepositoryInterface;
use App\Models\Content;

class ContentRepository implements ContentRepositoryInterface
{
    /**
     * @var Content
     */
    private $content;

    public function __construct(Content $content)
    {
      $this->content = $content;  
    }

    /**
     * 全ての投稿内容を取得する
     *
     * @return Content|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getContentAll()
    {
        return $this->content->all();
    }

    public function saveContent($saveData)
    {
        $saveInfo = $this->content;
        $saveInfo['user_id'] = $saveData['userId'];
        $saveInfo['content'] = $saveData['content'];
        $saveInfo->save();
        
        return true;   
    }
}
