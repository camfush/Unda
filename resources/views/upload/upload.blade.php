@extends('layouts.master')
@section('page-title', 'View your details')
@push('scripts')
  <script src="{{ asset('js/edit-toggle.js') }}"></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
@endpush

@section('content')
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
            <form class="" enctype="multipart/form-data" action="{{route('posts.store')}}" method="post">
              {{ csrf_field() }}
              <fieldset>
                <legend>Video Details</legend>
                <br />
                <div class="row">
                  <label class="col-lg-2" for="vfile">Select Video File</label>
                  <input class="col-lg-5" id="vfile" name="vfile" type="file" />
                </div>
                <div class="row">
                  <br />
                </div>
                <div class="row">
                  <label class="col-lg-2" for="vdesc">Add Description</label>
                  <textarea class="col-lg-5" name="description" id="vdesc" rows="4"></textarea>
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
