<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')
  <body>
    <div class="main-wrapper">
      <div class="app" id="app">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
      </div>
    </div>
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
  </body>
  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>
</html>
