<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reaction;
use Auth;

class ReactionController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $object = json_decode($request->getContent());
      $reaction = Reaction::create([
        'user_id' => Auth::user()->id,
        'post_id' => $object->post_id,
        'type' => $object->type,
      ]);

      return $reaction;
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
