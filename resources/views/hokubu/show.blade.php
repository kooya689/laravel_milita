{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('base.base')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<form action="/hokubu" method="post">
    @csrf
    <h3>{{$hokubu->name}}  <small>投稿日：{{ date("Y年m月d日h時i分",strtotime($hokubu->created_at)) }}</small>
</h3>
    <p>{{$hokubu->body}}</p>
    <br><br>
    <a href="/hokubu/{{$hokubu->id}}/edit">編集する</a>
    
    <a href="/hokubu">一覧に戻る</a>

@endsection