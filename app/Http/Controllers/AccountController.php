<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;

class AccountController extends Controller
{
    public function show()
    {
      return view('account.account-settings', ['user' => Auth::user()]);
    }

    public function destroy()
    {
      Auth::user()->delete();
      flash()->success('Account deleted!');
      return Redirect::to('/');
    }

    public function friends()
    {
      return view('account.friends', ['friends' => Auth::user()->friends()]);
    }

    public function myvideos()
    {
      return view('account.myvideos', ['videos' => Auth::user()->posts()]);
    }
}
