  @extends('main')

  @section('title')
    | Home
  @endsection

  @section('content')
    <div class="row">

      <div class="col-md-12">

        <div class="jumbotron">
          <h1>歡迎參觀建誠的部落格!</h1>
          <p>感謝您的參觀, 請關注最流行的貼文</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">流行貼文</a></p>
        </div>

      </div>
      {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://moving2canada.com/wp-content/uploads/2016/03/Man-with-suitcase-travelling-800x400.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.tribaeast.com/wp-content/uploads/2017/09/Ngong-Ping-360-Lantau-Culture-and-Heritage-Insight-Tour.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mintfares.com/wp-content/uploads/2018/05/How-To-Turn-Your-Long-LAX-Layover-Into-A-Great-Adventure.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}
    </div><!-- End of row -->

    <div class="row">
        <div class="col-md-8">
          
          @foreach($posts as $post)
            <div class="post">
              <h3>{{$post->title}}</h3>
              <p>
                {!!mb_substr(strip_tags($post->body),0,200,'UTF-8')!!} {!!strlen(strip_tags($post->body)) > 200 ? '...':''!!}
              </p>
              <a href="{{Route('blog.single',$post->slug)}}" class="btn btn-primary">繼續閱讀</a>
            </div>
          @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
      </div>
    </div> <!-- End of row -->
  @endsection
  