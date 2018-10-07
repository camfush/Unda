<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9" id="video">
      <video controls><source src="{{Storage::url('posts/' . $element->hash)}}" type="video/mp4"/></video>
    </div>
    <div class="col-lg-3 comments" style="background-color: #d7dde4">
      <p><h3>Comments</h3></p>
      @if(count($element->comments) > 0)
        @foreach ($element->comments as $comment)
          @include('comments.show', ['element' => $comment])
        @endforeach
      @else
        <p>No comments yet</p>
      @endif
      <form class="" action="{{URL::to('/comments/store')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="content" value="">
        <input type="hidden" name="post_id" value="{{$element->id}}">
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
  <div class="row">
    <p>{{$element->description}}</p>
    <div class="col-lg-9 m-1 interact-bar">
      <button type="button" class="btn custom-button">Love</button>
      <button type="button" class="btn custom-button">Hate</button>
      <button type="button" class="btn custom-button">Share</button>
      <button type="button" class="btn custom-button">Report</button>
    </div>
  </div>
</div>
