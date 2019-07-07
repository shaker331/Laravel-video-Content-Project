   <!-- Single Sidebar Widget -->
   <div class="single-widget-area mb-50">
    <h2 class="widget-title">{{$music->name}}</h2>
    @foreach ($music->videos()->Published()->orderBy('created_at','desc')->take(4)->get() as $video)

    <!-- Single Blog Post -->
    <div class="single-blog-post style4 d-flex mb-30">
        <div class="blog-thumb">
            <img src="{{URL::asset("$video->image")}}" alt="">
            <!-- Play Button -->
            <a href="{{$video->youtube}}" class="video-play-btn style3"><i class="fa fa-play"></i></a>
        </div>
        <div class="blog-content">
            <a href="{{route('showCategory',['id'=>$video->category->id,'slug'=>slug($video->category->name)])}}" class="post-tag">{{$video->category->name}}</a>
            <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}" class="post-title">{{$video->name}}</a>
            <div class="post-meta">
                <a href="#"><img src="img/core-img/chat2.png" alt="">  {{$video->comments->count()}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Single Sidebar Widget -->
<div class="single-widget-area border-style mb-50">
    <h2 class="widget-title">{{$sport->name}}</h2>
    @foreach ($sport->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)

    <!-- Single Blog Post -->
    <div class="single-blog-post style3">
        <img src="{{URL::asset("$video->image")}}" alt="">
            <!-- Play Button -->
            <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
        </div>
        <div class="blog-content">
            <a href="{{route('showCategory',['id'=>$video->category->id,'slug'=>slug($video->category->name)])}}" class="post-tag">{{$video->category->name}}</a>
            <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}" class="post-title">{{$video->name}}</a>
            <div class="post-meta d-flex justify-content-between">
                <a href="#"><img src="img/core-img/calendar2.png" alt="">{{$video->created_at}}</a>
                <div class="d-flex">
                    <a href="#"><img src="img/core-img/chat2.png" alt=""> {{$video->comments->count()}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach


<!-- Single Sidebar Widget -->
<div class="single-widget-area border-style mb-50">
    <h2 class="widget-title">{{$fashion->name}}</h2>
    <!-- Single Blog Post -->
    @foreach ($fashion->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)

    <div class="single-blog-post style3">
        <div class="blog-thumb mb-30">
            <img src="{{URL::asset("$video->image")}}" alt="">
            <!-- Play Button -->
            <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
        </div>
        <div class="blog-content">
            <a href="{{route('showCategory',['id'=>$video->category->id,'slug'=>slug($video->category->name)])}}" class="post-tag">{{$video->category->name}}" class="post-tag">{{$video->category->name}}</a>
            <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}" class="post-title">{{$video->name}}</a>
            <div class="post-meta d-flex justify-content-between">
                <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                <div class="d-flex">
                    <a href="#"><img src="img/core-img/chat2.png" alt="">  {{$video->comments->count()}}</a>
                   
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- ##### Post Details Area End ##### -->

