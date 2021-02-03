<?php

namespace App\Repositories;

interface ContentRepositoryInterface
{
    /**
     * 全ての投稿内容を取得する
     *
     * @return Content|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getContentAll();

    /**
     * 投稿内容を保存する
     *
     * @param array $sentData
     * @return bool
     */
    public function saveContent($saveData);
}
