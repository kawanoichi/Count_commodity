<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id = 'zero')
    {
        $data = [
            'msg' => 'これは',
            'id'  => $id
        ];
        // view(テンプレート, 配列)
        return view('hello.index', $data);
    }
}
