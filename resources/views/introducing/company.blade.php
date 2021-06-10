@extends('base.base')

    @section('title',"サイトの概要")
    <a href="http://160.16.61.64/login">ログイン</a> 
     @section('content')
     <br />
     <h1>こんにちは！</h1>
<br />
<br />
<p>まず初めに<br />
この度は、こちらのサイトに来て頂きありがとうございます。<br />
<br />
<br />

このサイトでは自衛隊好きの方、元自衛官の方、又は現役の方などを中心に<br />
ゆる〜く会話できたらと思い設立致しました。<br />
あまり熱くならずに節度のある発言をして頂くようお願い申し上げます。<br />
<br />
<br />

それではごゆっくり楽しんでください！！</p>
<br />
<br />
<br />
<br />
<input type="button" onclick="history.back()" value="戻る">

@endsection

    @section('footer')

    <footer>
        <small>Copyright  2021  Sugarjp &copy; MiliTa ComPany</a> All Rights Reserved.</small>
        <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>
         <!--ページの上部に戻る「↑」ボタン-->
         <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
      
        
    @endsection
