<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data = [
            'msg' => 'これはBladeを利用したサンプルだよ。',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request) {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん!'
        ];
        return view('hello.index', $data);
    }
}
