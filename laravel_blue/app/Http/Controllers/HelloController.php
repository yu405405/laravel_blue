<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        return view('hello.index', ['message'=>'hello!']);
    }

    public function post(Request $request) {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
