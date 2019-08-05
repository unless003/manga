<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    //
 

   
     public function index()
    {
        return view('pages/index');
    }
      public function truyen()
    {
        return view('pages/truyen');
    }
       public function chap1Naruto()
    {
        return view('pages/chap1Naruto');
    }
    public function chap2Naruto()
    {
        return view('pages/chap2Naruto');
    }
     public function Action()
    {
        return view('pages/Action');
    }
}
