<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePost;
use \Carbon\Carbon;
use Redirect;
use URL;
use Auth;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts', $posts]);
    }

    public function search(Request $request)
    {
      $search = $request->input('search');
      $results = Post::where('name', 'LIKE', "%$search%");
      return view('posts.search', ['results' => $results, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('upload.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
      ini_set('memory_limit','10240M');
      $hash = md5(Carbon::now());
      $vfile = $request->file('vfile');
      Storage::put('/posts/', $vfile, 'public');

      $post = Post::create([
          'user_id' => Auth::user()->id,
          'hash' => $hash,
          'length' => 10,//Hash::make($data['password']),
          'description' => $request->input('description'),
      ]);
      return redirect(URL::to('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show', ['post', $post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->comments()->delete();
      $post->reactions()->delete();
      $post->delete();
      flash()->success('Post deleted!');
      return Redirect::to('/');
    }
}
