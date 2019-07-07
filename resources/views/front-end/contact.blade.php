@include('front-end.include.header')

<title>{{$title}} </title>


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
                            <br>
							<h2 class="title">{{$contact->name}} Information</h2>
						</div>
						<p>{{$contact->desc}} </p>
						<ul class="contact">
							<li><i class="fa fa-phone"></i> 202-555-0194</li>
							<li><i class="fa fa-envelope"></i> <a href="#">callie@email.com</a></li>
							<li><i class="fa fa-map-marker"></i> 123 6th St.Melbourne, FL 32904</li>
						</ul>
					</div>

					
				</div>
                <div class="post-a-comment-area mb-100 clearfix">
                        <h3 class="mb-50 text-center">Mail US</h3>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name*" required name="name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email*" required name="email">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn videomag-btn mt-30" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

    @include('front-end.include.footer')

