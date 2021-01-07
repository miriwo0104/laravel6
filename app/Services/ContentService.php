<?php

namespace App\Services;

use App\Repositories\ContentRepositoryInterface as ContentRepository;

class ContentService
{
    /**
     * @var ContentRepositoryInterface
     */
    private $contentRepository;

    public function __construct(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * 全ての投稿内容を取得する
     *
     * @return Content|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getContentAll()
    {
        return $this->contentRepository->getContentAll();
    }

    public function saveContent($saveData)
    {
        return $this->contentRepository->saveContent($saveData);
    }
}
