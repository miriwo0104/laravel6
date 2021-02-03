<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Jobs\LogExample;
// 下記を追記
use App\Jobs\OutputLogJob;

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 投稿機能
Route::get('/crud/list', 'ContentController@list')->name('content.list');
Route::post('/crud/save', 'ContentController@save')->name('content.save');

// ジョブ
Route::get('/job', function(){
    dispatch(new LogExample);

    return 'ログへの出力ジョブを実行しました。';
});

Route::get('/output_log_job', function(){
    $job = new OutputLogJob;
    dispatch($job);

    return 'ジョブの実行完了';
});

// メール
Route::get('/notice', 'NoticeController@index')->name('notice.index');
Route::get('/notice/mail/make', 'NoticeController@mailMake')->name('notice.mail.make');
Route::post('/notice/mail/confirm', 'NoticeController@mailConfirm')->name('notice.mail.confirm');
Route::post('/notice/mail/send', 'NoticeController@mailSend')->name('notice.mail.send');
