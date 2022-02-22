@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは<middleware>gogle.com</middleware>へのリンクです。</p>
    <p>これは<middleware>yahoo.com</middleware>へのリンクです。</p>
@endsection

@section('footer')
conpyright 2020 tuyano.
@endsection