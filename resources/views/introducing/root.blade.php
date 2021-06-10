@extends('base.base')

    @section('title',"管理人から挨拶")
    <a href="http://160.16.61.64/login">ログイン</a> 

     @section('content')
     <br />
  <h1>はじめまして！</h1>
<br />
<br />
<p> この度は、こちらのサイトに来て頂きありがとうございます。<br />
このサイトを運営する管理人の Sugar と申します。<br />
<br />
<br />
私は、東北方面隊の元自衛官であり２年の任期満了時に除隊しました。<br />
自衛官の方達と関わる機会は減り、たまに自衛隊を思い出す事があります。<br />
山に行った思い出が多いですが。。。笑<br />

現在は、アルバイトをしながら細々と暮らしています。<br />
<br />
<br />

このサイトを通じてみなさんと会話できたらと思います。<br />
<br />
<br />
<br />
<input type="button" onclick="history.back()" value="戻る">

</p>

         @endsection

    @section('footer')

    <footer>
        <small>Copyright  2021  Sugarjp &copy; MiliTa ComPany</a> All Rights Reserved.</small>
        <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>
         <!--ページの上部に戻る「↑」ボタン-->
         <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
      
        
    @endsection
