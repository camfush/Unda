<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')
  <body>
    <div class="main-wrapper">
      <div class="app" id="app">
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
      </div>
    </div>
    @include('layouts.footer')
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
  </body>
  <script src="{{URL::to('js/vendor.js')}}"></script>
  <script src="{{URL::to('js/app.js')}}"></script>
</html>
