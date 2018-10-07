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
use App\Notification;
use Session;

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
      $results = Post::where('description', 'LIKE', "%$search%")->paginate(3);
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
      $vfile = $request->file('vfile');
      $hash = Storage::put('public/posts/', $vfile, 'public');

      $post = Post::create([
          'user_id' => Auth::user()->id,
          'hash' => basename($hash),
          'length' => 10,//Hash::make($data['password']),
          'description' => $request->input('description'),
      ]);

      /*foreach (Auth::user()->friends as $friend) {
        Notification::create([
          'user_id' => $friend->id,
          'content' => Auth::user()->name,
        ]);
      }*/

      flash()->success('Your post has been uploaded');

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
