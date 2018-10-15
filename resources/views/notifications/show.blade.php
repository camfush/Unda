<li>
  <a href="" class="notification-item">
    <div class="img-col">
      @if(Auth::user()->profile_path)
        <div class="img" style="background-image: url('{{Storage::url(Auth::user()->profile_path)}}')"></div>
      @else
        <div class="img" style="background-image: url('{{URL::to('images/faces/1.png')}}')"></div>
      @endif
    </div>
    <div class="body-col">
      <p>
        <span class="accent">{{$element->user->name}}</span> uploaded new video:  {{-- TODO Needs to access the source user name, need to check with Joe how to do this --}}
        <span class="accent">{{$element->content}}</span>.
      </p>
    </div>
  </a>
</li>
