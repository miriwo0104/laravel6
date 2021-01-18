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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/job', function(){
    dispatch(new LogExample);

    return 'ログへの出力ジョブを実行しました。';
});

// 下記を追記
Route::get('/output_log_job', function(){
    $job = new OutputLogJob;
    dispatch($job);

    return 'ジョブの実行完了';
});
// 上記までを追記