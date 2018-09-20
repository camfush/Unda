<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        return view('main');
      }
      else {
        return view('guest');
      }
    }

    public function account()
    {
        return view('/account/account-settings');
    }
}
