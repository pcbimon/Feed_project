<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
//เปิดหน้าแล้วส่งค่าไป
      return view('hello.index',
      ['title'=>'...1','email'=>'...2']);
    }
}
