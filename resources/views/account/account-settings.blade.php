@extends('layouts.master')
@section('page-title', 'View your details')

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
            <fieldset>
              <legend>General</legend>
              <table class="table table-condensed table-responsive small">
                <tbody>
                  <tr class="d">
                    <td>Name</td>
                    <td>Cameron Frost</td>
                    <td><a href="">Edit</a></td>
                  </tr>
                  <!--Different row is displayed when user clicks edit - toggle the display of the rows-->
                  <tr class="d-none">
                    <td>Name</td>
                    <td colspan="3">
                        <form>
                          <fieldset>
                            <legend class="col-lg-12 text-center">Edit Name</legend>

                            <div class="row">
                              <label class="col-lg-3" for="new-first">First Name: </label>
                              <input class="col-lg-4" type="text" id="new-first" />
                              <label class="col-lg-3"><!--TODO Add glyphicon tick -->Name is valid</label>
                              <div class="col-lg-2"></div>
                            </div>

                            <div class="row">
                              <div class="col-lg-12"></div>
                              <label class="col-lg-3" for="new-last">Last Name: </label>
                              <input class="col-lg-4" type="text" id="new-last" />
                              <label class="col-lg-3">Name is valid</label>
                              <div class="col-lg-2"></div>
                            </div>

                            <button class="btn btn-default" type="submit">Save Changes</button>
                          </fieldset>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>Display Name</td>
                    <td>CamFush</td>
                    <td><a href="">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>102102571@student.swin.edu.au</td>
                    <td><a href="">Edit</a></td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </article>


  @endsection
