@include('front-end.include.header')
    <!-- ##### Header Area End ##### -->
    <title>{{$title}} </title>

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                            <div class="single-blog-post style2 mb-50">
                                <div class="blog-thumb mb-30">
                                    <img src="{{URL::asset("$videos->image")}}" alt="">
                                    <a href="{{$videos->youtube}}" class="video-play-btn style2"><i class="fa fa-play"></i></a>

                                </div>
                                <div class="blog-content">
                                    <a href="{{route('showCategory',['id'=>$videos->category->id,'slug'=>slug($videos->category->name)])}}" class="post-tag">{{$videos->category->name}}</a>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 blog-thumb mb-30 style2">
                                            </div>
                                            <p>{{$videos->desc}}</p>

                                    </div>
                                    <div class="post-meta mb-30">

                                            <a href="#"><img src="{{asset('img/core-img/author2.png')}}" alt=""> {{$videos->user->name}}</a>
                                            <a href="#"><img src="{{asset('img/core-img/calendar2.png')}}" alt=""> {{$videos->created_at}}</a>
                                            <a href="#"><img src="{{asset('img/core-img/chat2.png')}}" alt=""> {{$videos->comments->count()}}</a>
                                        </div>
                                    <!-- Like Dislike Share -->
                                    <div class="like-dislike-share mt-50">
                                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Likes 112</a>
                                    </div>
                                </div>
                            </div>
                        </div>
    @auth
        
                        @if (!empty($videos->comments()) )
                            
                       
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h3 class="mb-50">Comments ({{$videos->comments()->count()}})</h3>

                        <ol>
                            @foreach ($videos->comments as $comment)
                                
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{asset('img/bg-img/40.jpg')}}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">{{$comment->user->name}}</a>
                                            <a href="#" class="post-date">{{$comment->created_at->diffForHumans()}}</a>
                                        </div>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>

                            </li>

                            @endforeach
                          
                           @endif
                    <div class="post-a-comment-area mb-100 clearfix">
                        <h3 class="mb-50">Leave a comment</h3>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="{{route('commentstore',['id'=>$videos->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                <input type="hidden" value="{{$videos->id}}" name="video_id"> 
                             </div>
                                    <div class="col-12">
                                        <textarea name="comment" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn videomag-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                @endauth
                @include('front-end.include.disqus')
            </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
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

    </section>
    <!-- ##### Post Details Area End ##### -->
@include('front-end.include.footer')