<!DOCTYPE html>
        <html lang="ja">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MiliTalk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ここにサイト説明を入れます">
        <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/fixmenu_pagetop.js"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
        $(function(){
        $('a[href^="#"]').click(function() {
        var speed = 800;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
        });
        });
        </script>
        </head>
        
        <body>
        
        @if (Auth::check())
        <p>こんにちは！{{$user->name}}さん</p>
        @endif
        <header>
        <h1 id="logo"><a href="http://160.16.61.64/login"><img src="images/logo2.png" alt="Milita COMPANY"></a></h1>
        <nav id="menubar">
        <ul>
        <li><a href="http://160.16.61.64/room_choose">トークする</a></li>
        <li><a href="http://160.16.61.64/friend_search">友達を探す</a></li>
        <li><a href="http://160.16.61.64/contact_login">お問い合わせ</a></li>
        <li><a href="http://160.16.61.64/dashboard">アカウント管理</a></li>    
    </ul>
        </nav>
        </header>


   
    
        <footer>
        <small>Copyright  2021  Sugarjp &copy; <a href="index.html">MiliTa ComPany</a> All Rights Reserved.</small>
        <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>
        
        <!--ページの上部に戻る「↑」ボタン-->
        <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
        
        </body>
        </html>