<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ClosetInfo;
use Log;

class ClosetInfoController extends Controller
{
    public function index()
    {
      $user = Auth::user();
      $closetInfo = ClosetInfo::where('user_name','=',$user->name)->get();
      return view('index',[
        'closetInfo' => $closetInfo,
      ]);
    }

    public function create()
    {
      return view('ClosetInfo.create');
    }

    public function store(Request $request)
    {
      $closetInfo = new ClosetInfo;
      $user = Auth::user();
      $closetInfo->closet_name = $request->closet_name;
      $closetInfo->memo = $request->memo;
      $closetInfo->user_name = $user->name;
      $closetInfo->save();
      return redirect('/selectCloset');
  }

    public function edit($id)
    {
      $closetInfo = ClosetInfo::find($id);
      return view('ClosetInfo.edit', ['closetInfo' => $closetInfo]);
    }

    public function update(Request $request, $id)
    {
      // idを元にレコードを検索して$articleに代入
      $closetInfo = ClosetInfo::find($id);
      // editで編集されたデータを$articleにそれぞれ代入する
      $closetInfo -> closet_name = $request -> title;
      $closetInfo -> memo = $request -> memo;
      // 保存
      $article->save();
      // 詳細ページへリダイレクト
      return redirect('/selectCloset');
    }

}
