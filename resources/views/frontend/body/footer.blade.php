<footer id="footer-main">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="fm-box">

                    <div class="row">
                        <div class="col-md-6">

                            @php
                            $about_description = App\Models\AboutDescription::where('status', 1)->first();
                            $abouts = App\Models\About::where('status', 1)->orderBy('id', 'DESC')->get();
                            $projects = App\Models\FeaturedProject::where('status', 1)->orderBy('id', 'DESC')->get();
                            @endphp

                            <div class="box-widget">
                                <h5 class="box-title">About Us</h5>
                                <div class="box-content">
                                    <p>
                                        {!! $about_description-> about_descrption_en ?? 'NULL' !!}
                                    </p>
                                    <p>
                                        Email Us: <span class="color-white">{{ $setting->support_email }}</span>
                                        <br>
                                        Call Us: <span class="color-white">{{ $setting->phone }}</span>
                                    </p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-6 end -->
                        <div class="col-md-6">

                            <div class="box-widget">
                                <h5 class="box-title">Get Notified</h5>
                                <div class="box-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                    <form class="signup-form anim-movebottom-seq">
                                        <div class="sf1-notifications">
                                            <div class="sf1-notifications-content"></div>
                                        </div><!-- .sf1-notifications end -->
                                        <div class="form-group">
                                            <input type="email" placeholder="You Email">
                                            <input type="submit" class="form-control" value="Subscribe">
                                        </div><!-- .form-group end -->
                                    </form><!-- .signup-form end -->
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->

                </div><!-- .fm-box end -->
                <div class="fm-box">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="box-widget">
                                <h5 class="box-title">Latest Projects</h5>
                                <div class="box-content">
                                    <ul class="list-posts text-white">
                                        @forelse($projects->take(3) as $project)
                                        <li>
                                            <div class="post-img"><a href="#" class="post-img"><img src="{{ asset($project->image) }}" alt=""></a></div>
                                            <div class="post-content">
                                                <div class="post-title">
                                                    <h6 class="capitalized"><a href="#">{{ $project->title_en ?? 'NULL' }}</a></h6>
                                                </div><!-- .post-title end -->
                                                <div class="post-meta">
                                                    <ul>
                                                        <li>10 May, 2017</li>
                                                    </ul>
                                                </div><!-- .post-meta end -->
                                            </div><!-- .post-content end -->
                                        </li>
                                        @empty
                                            <h5 class="text-danger">No Project Found</h5>
                                        @endforelse
                                    </ul><!-- .list-posts -->
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3">

                            <div class="box-widget">
                                <h5 class="box-title">Twitter Feed</h5>
                                <div class="box-content">
                                    <div class="twitter-feed"></div>
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3">

                            <div class="box-widget">
                                <h5 class="box-title">Useful Links</h5>
                                <div class="box-content">
                                    <ul class="list-links">
                                        <li><a href="#">Check Our New Products</a></li>
                                        <li><a href="#">Get Your Ticket Now</a></li>
                                        <li><a href="#">Get Your Direction</a></li>
                                        <li><a href="#">View All The Events</a></li>
                                        <li><a href="#">Explore Our Blog</a></li>
                                        <li><a href="#">FAQ & Privacy Policy</a></li>
                                    </ul><!-- .list-links -->
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3">

                            <div class="box-widget">
                                <h5 class="box-title">Instagram</h5>
                                <div class="box-content">
                                    <ul class="instagram-feed" id="instagram-feed"></ul>
                                    <a href="https://www.instagram.com/themepofo/" class="instagram-user"><i class="fa fa-instagram"></i>Follow us in Instagram</a>
                                </div><!-- .box-content end -->
                            </div><!-- .box-widget end -->

                        </div><!-- .col-md-3 end -->
                    </div><!-- .row end -->

                </div><!-- .fm-box end -->

            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->

</footer>
