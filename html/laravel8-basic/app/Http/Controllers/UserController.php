<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // ユーザ作成入力画面
    public function create()
    {
        return view('user.create');
    }

    /**
     * User作成内容の確認
     *
     * @param Request $request
     * @return void
     */
    public function confirm(Request $request)
    {
        return $request;
    }
}
