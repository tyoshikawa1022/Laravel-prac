<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
// use App\Http\Requests\PostRequest;

class FormController extends Controller
{

    /**
     * 入力画面
     *
     * @return string
     */
    public function input()
    {
        return view('form.input');
    }

    /**
     * 完了画面
     *
     * @return string
     */
    // public function save(PostRequest $request)
    public function save(Request $request)
{
    // $name = Input::get('name');
    // $email = Input::get('email');
    // $tel = Input::get('tel');
    // $gender = Ibput::get('gender');
    // $contet = Ibput::get('content');

    // データベース登録
    $member = new Member;
    $member->name = $request->name;
    $member->tel = $request->tel;
    $member->email = $request->email;
    $member->gender = $request->gender;
    $member->content = $request->content;
    $member->save();

    // $member->name = name;
    // $member->tel = tel;
    // $member->email = email;
    // $member->gender = gender;
    // $member->content = content;
    // $member->save();

    // リロード等による二重送信防止
    $request->session()->regenerateToken();
   
    return view('form.complete');
}

}
