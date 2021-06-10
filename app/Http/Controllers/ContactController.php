<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index() 
    {

    }

    public function contactus()
    {
        $data = [
            'conf' => '※下の項目を入力してください。',
            'send' => '',
        ];

        return view('contact.contact',$data);
    }
    
    public function post(Request $request)
    {
        $conf = $request->conf;
        $send = $request->send;
        $data = [
            'conf'=>'送信が完了しました！',
            'send'=>'※お問い合わせ頂いた内容はご入力されたメールアドレスにお送り致しましたのでご確認ください。' 
        ];
        return view('contact.contact', $data);
    }

}


