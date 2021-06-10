@extends('base.base')

    @section('title')
    
    トークしよう！！

     @section('content')
   
<form action="/hokubu" method="post">
○名前<br>
<input type="text" name="name">
<br>
○コメント<br>
<textarea name="comment" rows="4" cols="40"></textarea>
<br>
<input type="submit" name="send" value="送信">




         @endsection
         <a href="http://160.16.61.64/Ltop">トップページへ</a>
<br />
   
    @section('footer')

    <footer>
        <small>Copyright  2021  Sugarjp &copy; MiliTa ComPany</a> All Rights Reserved.</small>
        <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>
         <!--ページの上部に戻る「↑」ボタン-->
         <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
      
        
    @endsection
