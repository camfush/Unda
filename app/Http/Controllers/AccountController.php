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

    public function destroy($id)
    {
      flash()->success('Account deleted!');
      return Redirect::to('/');
    }
}
