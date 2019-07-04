@include('front-end.include.header')


    
    <!-- ##### Tabs Area Start ##### -->
    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="true">Latest</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                                    <div class="latest-videos-slide owl-carousel">
    
                                @foreach ($latest_video as $latest)
                                   
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post style2">
                                        <div class="blog-thumb mb-30">
                                            <img  src="{{URL::asset("$latest->image")}}" alt="">
                                            <!-- Play Button -->
                                            <a href="{{$latest->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="{{route('showCategory',['id'=>$latest->category->id,'slug'=>slug($latest->name)])}}" class="post-tag">{{$latest->category->name}}</a>
                                            <a href="{{route('showvideo',['id'=>$latest->id,'slug'=>slug($latest->name)])}}" class="post-title">{{$latest->name}}</a>
                                            <div class="post-meta">
                                                <a href="#"><img src="{{asset('img/core-img/author2.png')}}" alt=""> {{$latest->user->name}}</a>
                                                <a href="#"><img src="{{asset('img/core-img/calendar2.png')}}" alt=""> {{$latest->created_at->diffForHumans()}}</a>
                                                <a href="#"><img src="{{asset('img/core-img/chat2.png')}}" alt=""> 5</a>
                                                <a href="#"><img src="{{asset('img/core-img/like2.png')}}" alt=""> 12k</a>
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
    

    <!-- ##### Catagory Area Start ##### -->
    <section class="catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                            @foreach ($videos as $video)
                            <!-- Single Blog Post -->
                        <div class="col-md-6">
                            <div class="single-blog-post style2 mb-50">
                                <div class="blog-thumb mb-20">
                                    <img src="{{URL::asset("$video->image")}}" alt="" width="50" height= "50">
                                    <!-- Play Button -->
                                    <a href="{{$video->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    {{-- <a href="#" class="post-tag">Featured</a> --}}
                                    <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}" class="post-title">{{$video->name}}</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="{{asset('img/core-img/author2.png')}}" alt=""> {{$video->user->name}}</a>
                                        <a href="#"><img src="{{asset('img/core-img/calendar2.png')}}" alt=""> {{$video->created_at->diffForHumans()}}</a>
                                        <a href="#"><img src="{{asset('img/core-img/chat2.png')}}" alt=""> 5</a>
                                        <a href="#"><img src="{{asset('img/core-img/like2.png')}}" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach              
                    </div>                 
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Newsletter</h2>
                            <p>Subscribe to our newsletter and join our thousand subscribers.</p>
                            <form action="#" method="post">
                                <input type="search" class="form-control" name="newsletter-search" placeholder="Your E-mail Address">
                                <button type="submit" class="btn videomag-btn">Subscribe</button>
                            </form>
                        </div>

                        @include('front-end.include.side-bar')

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <!-- Footer Content -->
                <div class="col-12 col-lg-4">
                    <div class="footer-content">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus.Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus</p>
                        <div class="footer-social-info d-flex">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
               @include('front-end.include.footer')