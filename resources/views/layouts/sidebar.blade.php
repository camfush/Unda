<aside class="sidebar">
  <div class="sidebar-container">
    <div class="sidebar-header">
      <div class="brand">
        <img src="{{asset('images/logo.png')}}"/>
      </div>
    </div>
    <nav class="menu">
      <ul class="sidebar-menu metismenu" id="sidebar-menu">
        <li>
          <a href="{{URL::to('/')}}">
            <i class="fa fa-home"></i> Home </a>
          </li>
          <li>
            <a href="">
              <i class="fa fa-th-large"></i> Upload
              <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
              <li>
                <a href="{{URL::to('/upload')}}"> New upload </a>
              </li>
              <li>
                <a href="{{URL::to('/item-editor')}}"> Video Editor </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{URL::to('/myvideos')}}">
              <i class="fa fa-bar-chart"></i> My videos
            </a>
          </li>
          <li>
            <a href="{{URL::to('/friends')}}">
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
