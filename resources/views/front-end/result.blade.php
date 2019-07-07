
@include('front-end.include.header')

	
	<!-- /HEADER -->

	<div class="post post-row">

		<div class="post-body">
			<ul class="post-meta">
				<li class="btn btn-danger"  role="button" style="color:black">result:{{$query}}</li>
				
			</ul>

		</div>
	</div>

    @if ($videos->count()>0)
   

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                    @foreach ($videos as $video)
                <!-- Post Details Content Area -->

                <div class="col-4 col-lg-4">
                    <div class="post-details-content mb-100">
                        <div class="single-blog-post style2 mb-50">
                            <div class="blog-thumb mb-30">
                                <a href="{{route('showvideo',['id'=>$video->id,'slug'=>slug($video->name)])}}"><img src="{{$video->image}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">{{$video->category->name}}</a>
                                <h4>{{$video->name}}</h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> {{$video->user->name}}	</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> {{$video->created_at}}</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                                <p>{{$video->desc}}</p>
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
               
                </div>
                @endforeach
                
        @else 
        <h1>No Result</h1>
        @endif 
        <div class="col-md-4 ">
                   
                  @include('front-end.include.side-bar')
       
        </div>

    </div>
            </div>
           

                <!-- Sidebar Widget -->
               
  </section>
                 
	@include('front-end.include.footer')

