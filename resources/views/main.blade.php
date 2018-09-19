@extends('layouts.master')
@section('page-title', 'Welcome to Unda')

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
          <div class="col-lg-9" id="video">
            <video controls><source src="" type="video/mp4"/></video>

          </div>
          <div class="col-lg-3 comments" style="background-color: #d7dde4">
            <p><h3>Comments</h3></p>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 m-1 interact-bar">
            <button type="button" class="btn custom-button">Love</button>
            <button type="button" class="btn custom-button">Hate</button>
            <button type="button" class="btn custom-button">Share</button>
            <button type="button" class="btn custom-button">Report</button>
          </div>
        </div>
      </div>
    </article>
  @endsection
