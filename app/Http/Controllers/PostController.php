<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePost;
use \Carbon\Carbon;
use Redirect;
use URL;
use Auth;

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
      return view('posts.search', ['search' => $request->input('search')]);
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
      $ffmpeg = \FFMpeg\FFMpeg::create([
          'ffmpeg.binaries'  => 'C:\Program Files (x86)\ffmpeg\bin\ffmpeg.exe',
          'ffprobe.binaries' => 'C:\Program Files (x86)\ffmpeg\bin\ffprobe.exe'
      ]);
      $hash = md5(Carbon::now());
      $vfile = $request->input('vfile');
      $video = $ffmpeg->open($vfile);
      $video->save(new \FFMpeg\Format\Video\X264(), $hash . '.mp4');

      $post = Post::create([
          'user_id' => Auth::user()->id,
          'hash' => $hash,
          'length' => Hash::make($data['password']),
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
