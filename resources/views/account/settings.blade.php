@extends('layouts.master')
@section('page-title', 'View your details')

@section('content')
  <div class="sidebar-overlay" id="sidebar-overlay"></div>
  <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
  <div class="mobile-menu-handle"></div>

  <article class="content dashboard-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <fieldset>
            <legend>Settings</legend>
            <table class="table table-condensed table-responsive small">
              <tbody>
                <tr class="row">
                  <td class="col-lg-3">Video Settings</td>
                  <td class="col-lg-6">Autoplay Videos</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Default</option>
                      <option>Always</option>
                      <option>Never</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3"></td>
                  <td class="col-lg-6">Captions</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Default</option>
                      <option>Always</option>
                      <option>Never</option>
                      <option>When Set</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3">Privacy</td>
                  <td class="col-lg-6">Friend Requests</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Anyone</option>
                      <option>Only mutual friends</option>
                      <option>Nobody</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3"></td>
                  <td class="col-lg-6">Who can see your posts?</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Anyone</option>
                      <option>Mutual Friends</option>
                      <option>Friends</option>
                      <option>Close Friends</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3"></td>
                  <td class="col-lg-6">Who can see your details?</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Anyone</option>
                      <option>Mutual Friends</option>
                      <option>Friends</option>
                      <option>Close Friends</option>
                      <option>Only Me</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3">Notifications</td>
                  <td class="col-lg-6">Notify me when these people post</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Friends</option>
                      <option>Close Friends</option>
                      <option>Never</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3"></td>
                  <td class="col-lg-6">Notify me when these people react to my posts</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Anyone</option>
                      <option>Friends</option>
                      <option>Close Friends</option>
                      <option>Never</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3"></td>
                  <td class="col-lg-6">How should we notify you?</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>Alert & Sound</option>
                      <option>Alert</option>
                      <option>When I log in</option>
                      <option>Never</option>
                    </select>
                  </td>
                </tr>
                <tr class="row">
                  <td class="col-lg-3">Language</td>
                  <td class="col-lg-6">What language do you speak?</td>
                  <td class="col-lg-3 row">
                    <select class="col-lg-8">
                      <option>English (Australian)</option>
                      <option>English (American)</option>
                      <option>German</option>
                      <option>French</option>
                    </select>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-lg-5"></div>
              <input class="btn btn-primary col-lg-2" type="submit" value="Update" />
              <div class="col-lg-5"></div>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="row">

      </div>
    </div>
  </article>
@endsection
