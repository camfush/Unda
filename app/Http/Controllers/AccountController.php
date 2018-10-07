<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use Notification;
use Redirect;

class AccountController extends Controller
{
    public function show()
    {
      return view('account.account', ['user' => Auth::user()]);
    }

    public function settings()
    {
      return view('account.settings');
    }

    public function destroy()
    {
      Auth::user()->delete();
      flash()->success('Account deleted!');
      return Redirect::to('/');
    }

    public function viewNotifications($id)
    {
      Notification::find($id)->destroy();
    }

    public function notifications()
    {
      return view('account.notifications');
    }

    public function friends()
    {
      return view('account.friends', ['friends' => Auth::user()->friends()]);
    }

    public function myvideos()
    {
      return view('account.myvideos', ['videos' => Auth::user()->posts()]);
    }

    public function updatename(Request $request)
    {
      $user = Auth::user();
      $user->name = $request->input('firstname') . ' ' . $request->input('lastname');
      $user->save();
      return Redirect::to('/account');
    }

    public function updatepicture(Request $request)
    {
      $user = Auth::user();
      $user->name = $request->input('firstname') . ' ' . $request->input('lastname');
      $user->save();
      return Redirect::to('/account');

    }

    public function updateemail(Request $request)
    {
      $user = Auth::user();
      $user->email = $request->input('email');
      $user->save();
      return Redirect::to('/account');

    }

    public function updatepassword(Request $request)
    {
      $user = Auth::user();
      $user->password = Hash::make($request->input('firstname'));
      $user->save();
      return Redirect::to('/account');
    }
}
