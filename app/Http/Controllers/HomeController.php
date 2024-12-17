<?php

namespace App\Http\Controllers;

class HomeController extends Controller
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
        return view('test.home',$value);
    }








}
