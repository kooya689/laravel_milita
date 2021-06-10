@extends('base.base')

    @section('title',"お問い合わせ")
    
     @section('content')
    <br /><p>{{$conf}}</p><br />
    <p>{{$send}}</p>
     
<form method="post" action="/contact_login">
    <table>
        @csrf
<br>
        <tr><th>お名前 (必須)</th><td>
        <input type="text" name="name"></td>
    </tr>
    <tr><th>メールアドレス (必須)</th><td>
        <input type="address" name="address"></td>
    </tr>
    <tr><th>ご用件 (必須)</th><td>
        <textarea name="requ"></textarea></td>
    </tr>
    
           <tr><th></th><td><input type="submit" name="send" value="送信">
            </td></tr>
    </table>
    <br />
<br />
    <a href="http://160.16.61.64/Ltop">トップページへ</a>
<br />
    </form>

    
<br />



         @endsection

    @section('footer')

    <footer>
        <small>Copyright  2021  Sugarjp &copy; MiliTa ComPany</a> All Rights Reserved.</small>
        <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>
         <!--ページの上部に戻る「↑」ボタン-->
         <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
      
        
    @endsection
