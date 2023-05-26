<!--
    http://localhost:8000/hello
 -->

{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

{{--
@secionの書き方１
'title'という名前のセクションに、'Index'というテキスト値を設定する。
--}}
@section('title', 'Index')

{{--
@secionの書き方２
@endsectionを使った場合
--}}
@section('menubar')
    {{-- 親セクションの上書き --}}
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
