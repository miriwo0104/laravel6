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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/job', function(){
    dispatch(new LogExample);

    return 'ログへの出力ジョブを実行しました。';
});

Route::get('/notice', 'NoticeController@index')->name('notice.index');
Route::get('/notice/mail/make', 'NoticeController@mailMake')->name('notice.mail.make');
Route::post('/notice/mail/confirm', 'NoticeController@mailConfirm')->name('notice.mail.confirm');
Route::post('/notice/mail/send', 'NoticeController@mailSend')->name('notice.mail.send');e