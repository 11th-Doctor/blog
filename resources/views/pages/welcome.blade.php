  @extends('main')

  @section('title')
    | Home
  @endsection

  @section('content')
    <div class="row">

      <div class="col-md-12">

        <div class="jumbotron">
          <h1>歡迎參觀我的部落格!</h1>
          <p>感謝您的參觀, 請關注最流行的貼文</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">流行貼文</a></p>
        </div>

      </div>
    </div><!-- End of row -->

    <div class="row">
        <div class="col-md-8">
          
          @foreach($posts as $post)
            <div class="post">
              <h3>{{$post->title}}</h3>
              <p>
                {{substr($post->body,0,200)}} {{strlen($post->body) > 200 ? '...':''}}
              </p>
              <a href="{{route('posts.show',[$post->id])}}" class="btn btn-primary">繼續閱讀...</a>
            </div>
          @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
      </div>
    </div> <!-- End of row -->
  @endsection
  