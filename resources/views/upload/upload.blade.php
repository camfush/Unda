@extends('layouts.master')
@section('page-title', 'View your details')
@push('scripts')
  <script src="{{ asset('js/edit-toggle.js') }}"></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
@endpush

@section('content')
  <aside class="sidebar">
    <div class="sidebar-container">
      <div class="sidebar-header">
        <div class="brand">
          <img src="{{asset('images/logo.png')}}"/>
        </div>
      </div>
      <nav class="menu">
        <ul class="sidebar-menu metismenu" id="sidebar-menu">
          <li class="active">
            <a href="index.html">
              <i class="fa fa-home"></i> Home </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-th-large"></i> Upload
                <i class="fa arrow"></i>
              </a>
              <ul class="sidebar-nav">
                <li>
                  <a href="items-list.html"> New upload </a>
                </li>
                <li>
                  <a href="item-editor.html"> Video Editor </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bar-chart"></i> My videos
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-table"></i> Friends
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </aside>
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
    <div class="mobile-menu-handle"></div>

    <article class="content dashboard-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h3>Upload Video</h1>
          </div>
          <div class="col-lg-12">
            <br />
          </div>
          <div class="col-lg-12">
            <form>
              <fieldset>
                <legend>Video Details</legend>
                <br />
                <div class="row">
                  <label class="col-lg-2" for="vtitle">Video Title</label>
                  <input class="col-lg-5" id="vtitle" type="text" />
                </div>
                <div class="row">
                  <br />
                </div>
                <div class="row">
                  <label class="col-lg-2" for="vfile">Select Video File</label>
                  <input class="col-lg-5" id="vfile" type="file" />
                </div>
                <div class="row">
                  <br />
                </div>
                <div class="row">
                  <label class="col-lg-2" for="vdesc">Add Description</label>
                  <textarea class="col-lg-5" id="vdesc" rows="4">

                  </textarea>
                </div>
                <div class="row">
                  <br />
                </div>
                <div class="row" id="video">
                  <legend class="col-lg-12" for="vpreview">Preview</legend>
                  <video class="col-lg-9" id="vpreview" controls><source src="{{-- Storage::url('posts/' . $element->hash . '.mp4') --}}" type="video/mp4"/></video>
                </div>
                <div class="row">
                  <br />
                </div>
                <input class="btn btn-primary" type="submit" value="Upload" />
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </article>


  @endsection
