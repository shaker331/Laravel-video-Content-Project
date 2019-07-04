
@include('front-end.include.header')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#pablo">
                        
              <br>
              <br>
                      <img class="img" src="{{asset('/assets/img/faces/marc.jpg')}}" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category">{{$profile->name}}</h6>
                    <h4 class="card-title">{{$profile->email}}</h4>
                    <p class="card-description">
                      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                  </div>
                </div>
              </div>
              <br>
              <br>
                 <!-- Single Sidebar Widget -->
                 <div class="col-md-6">
                        <br>
                        <br>
   <div class="single-widget-area mb-50">
    <h2 class="widget-title text-center">My Latest Posts</h2>
    <br>
    <br>
    @foreach ($profile->videos()->orderBy('created_at','desc')->take(4)->get() as $video)

    <!-- Single Blog Post -->
    <div class="single-blog-post style4 d-flex mb-30">
        <div class="blog-thumb">
            <img src="{{URL::asset("$video->image")}}" alt="">
            <!-- Play Button -->
            <a href="{{$video->youtube}}" class="video-play-btn style3"><i class="fa fa-play"></i></a>
        </div>
        <div class="blog-content">
            <a href="#" class="post-tag">{{$video->category->name}}</a>
            <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}" class="post-title">{{$video->name}}</a>
            <div class="post-meta">
                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
@include('front-end.include.footer')

</body>

</html>
