
    @include('front-end.include.header')
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area d-flex flex-wrap">

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms">
                <img src="{{$first_video->image}}" alt="">
                <!-- Play Button -->
                <a href="{{$first_video->youtube}}" class="video-play-btn"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="{{route('showCategory',['id'=>$first_video->category->id,'slug'=>slug($first_video->category->name)])}}" class="post-tag">{{$first_video->category->name}}</a>
                            <a href="{{route('showvideo',['id'=>$first_video->id,'slug'=>slug($first_video->name)])}}" class="post-title">{{$first_video->name}}</a>
                            <div class="post-meta">
                                <a href="{{route('profile',['id'=>$first_video->user->id,'slug'=>slug($first_video->user->name)])}}"><img src="img/core-img/author.png" alt=""> {{$first_video->user->name}}</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> {{$first_video->created_at->diffForHumans()}}</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" >
                <img src="{{$second_video->image}}" alt="">

                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="{{route('showCategory',['id'=>$second_video->category->id,'slug'=>slug($second_video->name)])}}" class="post-tag"> {{$second_video->category->name}}</a>
                            <a href="{{route('showvideo',['id'=>$second_video->id,'slug'=>slug($second_video->name)])}}" class="post-title">{{$second_video->name}}</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> {{$second_video->user->name}}</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> {{$second_video->created_at->diffForHumans()}}</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-second-section d-flex flex-wrap">
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" >
                    <img src="{{$third_video->image}}" alt="">

                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="{{route('showCategory',['id'=>$third_video->category->id,'slug'=>slug($third_video->name)])}}" class="post-tag">{{$third_video->category->name}}</a>
                                <a href="{{route('showvideo',['id'=>$third_video->id,'slug'=>slug($third_video->name)])}}" class="post-title">{{$third_video->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" >
                    <img src="{{$forth_video->image}}" alt="">

                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="{{route('showCategory',['id'=>$forth_video->category->id,'slug'=>slug($forth_video->name)])}}" class="post-tag">{{$forth_video->category->name}}</a>
                                <a href="{{route('showvideo',['id'=>$forth_video->id,'slug'=>slug($forth_video->name)])}}" class="post-title">{{$forth_video->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Tabs Area Start ##### -->
    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
<h2>Latest Video</h2>                        </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                                <div class="latest-videos-slide owl-carousel">

                            @foreach ($latest_video as $latest)
                               
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="{{$latest->image}}" alt="">
                                        <!-- Play Button -->
                                        <a href="{{$latest->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="{{route('showCategory',['id'=>$latest->category->id,'slug'=>slug($latest->name)])}}" class="post-tag">{{$latest->category->name}}</a>
                                        <a href="{{route('showvideo',['id'=>$latest->id,'slug'=>slug($latest->name)])}}" class="post-title">{{$latest->name}}</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> {{$latest->user->name}}</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$latest->created_at->diffForHumans()}}</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
    <!-- ##### Tabs Area End ##### -->

    <!-- ##### Travel Videos Area Start ##### -->
    <section class="travel-videos-area">
        <div class="container">
            <div class="travel-videos-content">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>{{$music->name}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        @foreach ($music->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)
                            
                        
                        <!-- Single Welcome Post -->
                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" >
                                <img src="{{$video->image}}" alt="">

                            <!-- Play Button -->
                            <a href="#" class="video-play-btn"><i class="fa fa-play"></i></a>
                            <!-- Content -->
                            <div class="welcome-post-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        {{-- <a href="#" class="post-tag">{{$video->tags->name}}</a> --}}
                                        <a href="#" class="post-title">{{$video->name}}</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author.png" alt=""> {{$video->user->name}}</a>
                                            <a href="#"><img src="img/core-img/calender.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                            <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                  

                    <div class="col-12 col-lg-6">
                        <div class="row">
                                @foreach ($music->videos()->Published()->orderBy('created_at','desc')->skip(1)->take(4)->get() as $video)

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="{{$video->image}}" alt="">
                                        <!-- Play Button -->
                                        <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        {{-- <a href="#" class="post-tag">{{$video->tags->name}}</a> --}}
                                        <a href="#" class="post-title">{{$video->name}}</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt="">{{$video->created_at->diffForHumans()}}</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    <!-- ##### Travel Videos Area End ##### -->

    <!-- ##### Small Videos Area Start ##### -->
    <section class="small-videos-area">
        <div class="container">
            <div class="small-videos-content">
                <div class="row">

                    <!-- Fashion News -->
                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>{{$fashion->name}}</h2>
                        </div>
                        @foreach ($fashion->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> {{$video->user->name}}</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                
                   
                        @foreach ($fashion->videos()->Published()->orderBy('created_at','desc')->skip(1)->take(3)->get() as $video)

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- Technology News -->
                    <div class="col-12 col-md-5 col-lg-3">
                            <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>{{$sport->name}}</h2>
                        </div>
                        @foreach ($sport->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> {{$video->user->name}}</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($sport->videos()->Published()->orderBy('created_at','desc')->skip(1)->take(3)->get() as $video)

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- July Top News -->
                    <div class="col-12 col-md-5 col-lg-3">
                            <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>{{$movie->name}}</h2>
                        </div>
                        @foreach ($movie->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)
        
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> {{$video->user->name}}</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($movie->videos()->Published()->orderBy('created_at','desc')->skip(1)->take(3)->get() as $video)

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="{{$video->image}}" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#" class="post-tag">Featured</a> --}}
                                <a href="#" class="post-title">{{$video->name}}</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-md-5 col-lg-3">
                            <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                                <h2>{{$tv->name}}</h2>
                            </div>
                            
                                @foreach ($tv->videos()->Published()->orderBy('created_at','desc')->take(1)->get() as $video)
        
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="blog-thumb mb-5">
                                        <img src="{{$video->image}}" alt="">
                                        <!-- Play Button -->
                                        <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        {{-- <a href="#" class="post-tag">Featured</a> --}}
                                        <a href="#" class="post-title">{{$video->name}}</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> {{$video->user->name}}</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        
                            @foreach ($tv->videos()->Published()->orderBy('created_at','desc')->take(3)->get() as $video)
    
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="blog-thumb">
                                    <img src="{{$video->image}}" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    {{-- <a href="#" class="post-tag">Featured</a> --}}
                                    <a href="#" class="post-title">{{$video->name}}</a>
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
        </div>
    </section>
    <!-- ##### Small Videos Area End ##### -->

    <!-- ##### Big Add Area Start ##### -->
    <div class="big-add-area mb-100 wow fadeInUp" data-wow-delay="200ms">
        <div class="container-fluid">
            <a href="#"><img src="img/bg-img/big-add.png" alt=""></a>
        </div>
    </div>
    <!-- ##### Big Add Area End ##### -->

    @include('front-end.include.footer')
    