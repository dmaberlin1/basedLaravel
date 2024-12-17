<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $title='Test page';
        $h2='Welcome to Test page';
        $value=[
          'title'=>$title,
          'h2'=>$h2
        ];
        $title='Test page';
        $h2='Welcome to Test page';
        return view('test.test',$value);
    }








}
