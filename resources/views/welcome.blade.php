
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title -->
        <title>Video Mag - HTML Template for Video &amp; Magazine</title>
    
        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">
    
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
    
    </head>
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area d-flex flex-wrap">

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image:{{$first_video->image}} ;">
                <!-- Play Button -->
                <a href="{{$first_video->youtube}}" class="video-play-btn"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag">{{$first_video->category->name}}</a>
                            <a href="#" class="post-title">{{$first_video->title}}</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> {{$first_video->user->name}}</a>
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
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(img/bg-img/2.jpg);">
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag">Featured</a>
                            <a href="#" class="post-title">Spain: Take a virtual tour</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-second-section d-flex flex-wrap">
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(img/bg-img/3.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">5 Tips to create your garden</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/4.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">10 Movies you need to see</a>
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
                            <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="true">Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-viewed-tab" data-toggle="tab" href="#top-viewed" role="tab" aria-controls="top-viewed" aria-selected="false">Top Viewed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">See All Videos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="latest-videos-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-viewed" role="tabpanel" aria-labelledby="top-viewed-tab">
                            <div class="top-viewed-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                            <div class="videos-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

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
                            <h2>Travel Videos</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <!-- Single Welcome Post -->
                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/1.jpg);">
                            <!-- Play Button -->
                            <a href="#" class="video-play-btn"><i class="fa fa-play"></i></a>
                            <!-- Content -->
                            <div class="welcome-post-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Watch a tiny cat taking a bath</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row">

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/8.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">New York Trip</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/9.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Coffee in Paris</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="600ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/10.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Summer Holiday</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/11.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Discover the islands</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Fashion</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/12.jpg" alt="">
                                <!-- Play Button -->
                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/14.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/15.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/16.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Technology News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Technology</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/13.jpg" alt="">
                                <!-- Play Button -->
                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">New Iphone release</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/17.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/18.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/19.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- July Top News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>July Top</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/20.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/21.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/22.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/23.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/24.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="800ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/25.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

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
    <!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>

</html>