<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8" id="video">
      <video controls><source src="{{Storage::url('posts/' . $element->hash)}}" type="video/mp4"/></video>
    </div>
    <div class="col-lg-4 comments" style="background-color: #d7dde4">
      <p><h5>Description</h5></p>
      <p class="col-lg-12 text-left" >{{$element->description}}</p>
      <p><h5>Comments</h5></p>
      @if(count($element->comments) > 0)
      <table>
        @foreach ($element->comments as $comment)
          @include('comments.show', ['element' => $comment])
        @endforeach
      </table>
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
    <div class="col-lg-8 m-1 interact-bar row">
      <form class="d-inline" action="{{URL::to('/react')}}" method="post">
        <button type="button" data-react="like" data-post="{{$element->id}}" class="btn custom-button react-button">Love (<span>{{count($element->likes)}}</span>)</button>
        <button type="button" data-react="dislike" data-post="{{$element->id}}" class="btn custom-button react-button">Hate (<span>{{count($element->dislikes)}}</span>)</button>
      </form>
      <button type="button" class="btn custom-button col-lg-3">Share</button>
      <button type="button" class="btn custom-button col-lg-3">Report</button>
    </div>
  </div>
</div>
