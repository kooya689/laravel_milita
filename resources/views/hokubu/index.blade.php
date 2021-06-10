{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('base.base')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', )
<h1>北部の人集まれ〜</h1>

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')


<style type="text/css">
.pagination {
    display: inline-block;
}
.pagination .page-item {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    list-style: none;
}
</style>

@foreach ($hokubus as $hokubu)
@csrf
<a href="/hokubu/{{$hokubu->id}}"><h4>{{$hokubu->name}}</a>
    <small>投稿日：{{ date("Y年m月d日h時i分",strtotime($hokubu->created_at)) }}</small>
</h4>
<p>{!! nl2br(e($hokubu->body)) !!}</p>

<form action="/hokubu/{{$hokubu->id}}" method="post">
@csrf
<input type="hidden" name="_method" value="delete">
<input type="submit" name="" value="削除する">
</form>

<hr>
@endforeach
{{ $hokubus->links() }}
@csrf
@include('hokubu.create')
<br>

<a href="http://160.16.61.64/Ltop">トップページへ</a>
@endsection
