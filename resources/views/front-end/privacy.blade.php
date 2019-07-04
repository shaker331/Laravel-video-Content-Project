
@include('front-end.include.header')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title text-center">{{$privacy->name}}</h2>
                    </div>
                    <p class=" text-center">{{$privacy->desc}} </p>
                        <footer class="blockquote-footer">shaker</footer>
                    </blockquote>
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
