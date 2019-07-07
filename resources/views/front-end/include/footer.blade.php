<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <!-- Footer Content -->
            <div class="col-12 col-lg-4">
                <div class="footer-content">
                    <!-- Logo -->
                    <a href="{{route('welcome')}}" class="foo-logo"><img src="img/core-img/logo.png" alt=""></a>
                    <p>All Kind of  Video</p>
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
            <!-- Footer Content -->
            <div class="col-12 col-lg-7 col-xl-6">
                <div class="footer-content d-flex flex-wrap">
                    

                    <!-- Footer Nav -->
                    <div class="footer-nav">
                        <h5 class="widget-title">About Us</h5>
                        <nav>
                            <ul>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('privacy')}}">Privacy</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Video Catagory -->
                    <div class="video-catagory">
                        <h5 class="widget-title">Video Categories</h5>
                        <ul>
                            @foreach ($categories as $cat)
                                
                            <li><a href="{{route('showCategory',['id'=>$cat->id,'slug'=>slug($cat->name)])}}"><span>{{$cat->name}}</span> <span>{{$cat->videos->count()}}</span></a></li>
                            @endforeach


{{-- 
                            <li><a href="{{route('showCategory',['id'=>$music->id,'slug'=>slug($music->name)])}}"><span>{{$music->name}}</span> <span>{{$catcount}}</span></a></li>
                            <li><a href="{{route('showCategory',['id'=>$fashion->id,'slug'=>slug($fashion->name)])}}"><span>{{$fashion->name}}</span> <span>{{$catcount1}}</span></a></li>
                            <li><a href="{{route('showCategory',['id'=>$sport->id,'slug'=>slug($sport->name)])}}"><span>{{$sport->name}}</span> <span>{{$catcount2}}</span></a></li>
                            <li><a href="{{route('showCategory',['id'=>$movie->id,'slug'=>slug($movie->name)])}}"><span>{{$movie->name}}</span> <span>{{$catcount3}}</span></a></li>
                            <li><a href="{{route('showCategory',['id'=>$tv->id,'slug'=>slug($tv->name)])}}"><span>{{$tv->name}}</span> <span>{{$catcount4}}</span></a></li> --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Copywrite Text -->
                <p class="copywrite-text"><a href="{{route('welcome')}}">
Copyright &copy;2019> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{route('welcome')}}" target="_blank">Video Garden</a>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->


	 <!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
<script id="dsq-count-scr" src="//video-web.disqus.com/count.js" async></script>
</body>

</html>