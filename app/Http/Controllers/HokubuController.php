<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hokubu;
use Validator;
use App\Http\Requests\CreatePost;
use Illuminate\Support\Facades\Auth;
class HokubuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hokubus = Hokubu::orderBy("id","desc")
                    ->paginate(5);
        
        // 以下をコメントアウト
        // return $articles;
        // 以下を追加
        return view('hokubu.index', ['hokubus' => $hokubus]);
               
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePost $request)
    {
        $input = $request->only('name', 'body', 'user_id');
       

           //バリデーション成功
        $hokubu = new Hokubu();
        $hokubu->name = $input["name"];
        $hokubu->body = $input["body"];
        $hokubu->user_id = auth()->id();
        
        $hokubu->save();

        
        return redirect('/hokubu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePost $request)
    {
        
        // モデルからインスタンスを生成
        $hokubu = new Hokubu;
        // $requestにformからのデータが格納されているので、以下のようにそれぞれ代入する
        $hokubu->name = $request->name;
        $hokubu->body = $request->body;
        $hokubu->user_id = $request->user_id;
        
        // 保存
        $hokubu->save();
        // 保存後 一覧ページへリダイレクト
        return redirect('/hokubu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hokubu = Hokubu::find($id);
  // viewにデータを渡す
  return view('hokubu.show', ['hokubu' => $hokubu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hokubu = Hokubu::find($id);
        return view('hokubu.edit', ['hokubu' => $hokubu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // idを元にレコードを検索して$articleに代入
        $hokubu = Hokubu::find($id);
        // editで編集されたデータを$articleにそれぞれ代入する
        $hokubu->name = $request->name;
        $hokubu->body = $request->body;
        $hokubu->user_id = $request->user_id;
        
         // 保存
        $hokubu->save();
        
        // 詳細ページへリダイレクト
        return redirect("/hokubu/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // idを元にレコードを検索
        $hokubu = Hokubu::find($id);
        // 削除
        $hokubu->delete();
        // 一覧にリダイレクト
        return redirect('/hokubu');
    }
}
