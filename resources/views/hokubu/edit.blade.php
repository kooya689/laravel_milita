{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('base.base')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<form action="/hokubu/{{$hokubu->id}}" method="post">
    {{ csrf_field() }}
    <div>
      <label for="name">名前</label>
      <input type="text" name="name" placeholder="山田太郎" value="{{$hokubu->name}}">
    </div>
    <div>
      <label for="body">内容</label>
      <textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる">{!! nl2br(e($hokubu->body)) !!}</textarea>
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </form>

@endsection