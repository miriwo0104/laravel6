<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            // 下記を追記
            $table->string('file_path')->comment('アップロードファイルパス');
            $table->string('file_name')->comment('アップロードファイルのオリジナルファイル名');
            $table->softDeletes();
            // 上記までを追記
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_attachments');
    }
}
