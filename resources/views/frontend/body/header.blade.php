<header id="header" data-scroll-index="0">

    <div id="header-wrap">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="header-contact-info">
                        <li><i class="fa fa-phone"></i><span>Call Us:</span> {{ $setting->phone }} </li>
                        <li><i class="fa fa-envelope"></i><span>Email:</span> {{ $setting->support_email }} </li>
                    </ul><!-- .header-contact-info end -->
                    <div class="header-social-icons">
                        <span>Follow Us:</span>
                        <ul class="social-icons">
                            <li><a class="si-facebook" href="{{ $setting->facebook_url }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="si-twitter" href="{{ $setting->twitter_url }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="si-behance" href="{{ $setting->linkedin_url }}"><i class="fa fa-behance"></i></a></li>
                            <li><a class="si-dribbble" href="{{ $setting->youtube_url }}"><i class="fa fa-dribbble"></i></a></li>
                        </ul><!-- .social-icons end -->
                    </div><!-- .header-social-icons -->

                    <div class="logo-and-nav">
                        <a class="logo logo-header logo-text" href="#">
                            <img src="{{ asset($setting->site_logo)}}" alt="">
                            <h3><span class="colored">Scour</span></h3>
                            <span>Landing Template</span>
                        </a><!-- .logo end -->

                        <ul id="main-menu" class="main-menu">
                            <li><a data-scroll-nav="0" href="#header">Home</a></li>
                            <li><a data-scroll-nav="1" href="#about-us">About Us</a></li>
                            <li><a data-scroll-nav="2" href="#featured-projects">Featured Projects</a></li>
                            <li><a data-scroll-nav="3" href="#our-services">Our Services</a></li>
                            <li><a data-scroll-nav="4" href="#our-works">Our Works</a></li>
                            <li><a data-scroll-nav="5" href="#our-team">Testmonials</a></li>
                            <li><a data-scroll-nav="6" href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class="header-btn btn small colorful hover-dark" href="#">Get a Qoute</a>
                        <div class="mobile-menu-btn hamburger hamburger--slider">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </div><!-- .mobile-menu-btn -->
                        <div class="clearfix"></div>
                        <div id="mobile-menu"></div><!-- #mobile-menu end -->
                    </div><!-- .logo-and-nav end -->

                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->

    </div><!-- #header-wrap end -->

</header>
