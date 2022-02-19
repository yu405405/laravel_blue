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

Route::get('/', function () {
    return view('welcome');
});



Route::get('hello/{msg?}', function($msg="no message.") {
    $html = <<< EOF
    <html>
    <head>
        <style>
            body {font-size: 16pt; color: #999;}
            h1 {font-size: 100pt; text-align: right; color: #eee margin: -40px 0px -50px 0px;}
        </style>
    </head>
    <body>
        <h1>Good morning</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </html>
    EOF;
    return $html;
});