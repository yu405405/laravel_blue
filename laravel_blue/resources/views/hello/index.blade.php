@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    <ul>
        @each('components.item', $data, 'item')
    </ul>
    <!-- @include('components.message', [
            'msg_title' => 'OK',
            'msg_content' => 'サブビューだよ.'
        ]) -->
    <!-- @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent -->
@endsection

@section('footer')
conpyright 2020 tuyano.
@endsection