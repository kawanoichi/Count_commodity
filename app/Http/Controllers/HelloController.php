<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HelloController extends Controller
// {
//     public function index($id = 'zero')
//     {
//         $data = [
//             'msg' => 'あああ',
//             'id'  => $id
//         ];
//         // view(テンプレート, 配列)
//         return view('hello.index', $data);
//     }
//     public function post(Request $request)
//     {
//         $msg = $request->msg;
//         $data = [
//             'msg' => $msg
//         ];

//         // view(テンプレート, 配列)
//         return view('hello.index', $data);
//     }
// }

class HelloController extends Controller
{
    public function index()
    {
        // view('フォルダ名.ファイル名', 配列)
        return view('hello.index');
    }
}
