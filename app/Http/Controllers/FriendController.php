<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use App\FriendRequest;

class FriendController extends Controller
{

    public function sendRequest($from, $to)
    {
      $fRequest = FriendRequest::create([
        'from' => $from->id,
        'to' => $to->id,
      ]);
      return $fRequest;
    }

    public function acceptRequest($fRequest)
    {
      $friend = Friend::create([
        'friend1' => $fRequest->from,
        'friend2' => $fRequest->to,
      ]);
      $fRequest->delete();
      return $friend;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $friend = Friend::create($request->all());

      //return redirect(route();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
