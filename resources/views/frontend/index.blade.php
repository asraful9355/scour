@extends('frontend.master')
@section('title')
Scour
@endsection
@section('content')

<header id="header-sticky">
    <div id="header-sticky-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- #header-sticky-wrap end -->
</header><!-- #header-sticky end -->

<!-- Banner
============================================= -->
@php
$banners = App\Models\Banner::where('status', 1)->latest()->get();
@endphp
<section id="banner">

    <div class="banner-parallax" data-scroll-index="0">

        <div class="banner-slider">
            <ul class="owl-carousel slider-img-bg">
                <li>
                    <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                    <div class="slide">
                        <img src="http://via.placeholder.com/1600x500?text=Image" alt="">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                     @foreach($banners as $banner)
                                        <div class="banner-center-box text-center">
                                            <h1>
                                                <span class="colored">  {{ $banner->title_en }}</span>
                                            </h1>
                                            <div class="description">
                                                {!! $banner->description_en !!}
                                            </div>
                                            <a class="btn colorful large hover-colorful" href="#">  {{ $banner->button_name_en }}</a>
                                        </div><!-- .banner-center-box end -->
                                      @endforeach
                                    </div><!-- .col-md-10 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>
                <li>
                    <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                    <div class="slide">
                        <img src="http://via.placeholder.com/1600x500?text=Image" alt="">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">

                                        <div class="banner-center-box text-center">
                                            <h1>
                                                <span class="colored">Great Experiences<br>For Building and Reconstruction</span>
                                            </h1>
                                            <div class="description">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing industry.
                                            </div>
                                            <a class="btn colorful large hover-dark" href="#">What We Do</a>
                                        </div><!-- .banner-center-box end -->

                                    </div><!-- .col-md-10 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>
                <li>
                    <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                    <div class="slide">
                        <img src="http://via.placeholder.com/1600x500?text=Image" alt="">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">

                                        <div class="banner-center-box text-center">
                                            <h1>
                                                <span class="colored">Great Experiences<br>For Building and Reconstruction</span>
                                            </h1>
                                            <div class="description">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing industry.
                                            </div>
                                            <a class="btn colorful large hover-dark" href="#">What We Do</a>
                                        </div><!-- .banner-center-box end -->

                                    </div><!-- .col-md-10 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>
                <li>
                    <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                    <div class="slide">
                        <img src="http://via.placeholder.com/1600x500?text=Image" alt="">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">

                                        <div class="banner-center-box text-center">
                                            <h1>
                                                <span class="colored">Great Experiences<br>For Building and Reconstruction</span>
                                            </h1>
                                            <div class="description">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing industry.
                                            </div>
                                            <a class="btn colorful large hover-dark" href="#">What We Do</a>
                                        </div><!-- .banner-center-box end -->

                                    </div><!-- .col-md-10 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>
                <li>
                    <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                    <div class="slide">
                        <img src="http://via.placeholder.com/1600x500?text=Image" alt="">
                        <div class="slide-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">

                                        <div class="banner-center-box text-center">
                                            <h1>
                                                <span class="colored">Great Experiences<br>For Building and Reconstruction</span>
                                            </h1>
                                            <div class="description">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing industry.
                                            </div>
                                            <a class="btn colorful large hover-dark" href="#">What We Do</a>
                                        </div><!-- .banner-center-box end -->

                                    </div><!-- .col-md-10 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->
                        </div><!-- .slide-content end -->
                    </div><!-- .slide end -->
                </li>
            </ul>
        </div><!-- .banner-slider end -->

    </div><!-- .banner-parallax end -->

</section><!-- #banner end -->

<!-- Content
============================================= -->
<section id="content">

    <div id="content-wrap">

        <!-- === About Us =========== -->
        <div id="about-us" class="flat-section about-us" data-scroll-index="1">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center anim-fadeIn">
                                <h2>About Scour Company</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-fadeIn mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Project Management</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-fadeIn mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Tiling & Painting</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-fadeIn mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Design & Build</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-fadeIn">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Building Renovation</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-12">

                            <div class="about-us-boxes-info">
                                <div class="box-info-1 grey-bg">
                                    <div class="box-icon"><img src="{{ asset('frontend/images/files/about-us/box-info-1/img-1.png')}}" alt=""></div>
                                    <div class="box-content">
                                        <h5>Best Facade Renovation</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                    </div><!-- .box-content end -->
                                </div><!-- .box-info-1 end -->
                                <div class="box-info-1 colorful-bg">
                                    <div class="box-icon"><img src="{{ asset('frontend/images/files/about-us/box-info-1/img-2.png')}}" alt=""></div>
                                    <div class="box-content">
                                        <h5>Concrete Transport</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                    </div><!-- .box-content end -->
                                </div><!-- .box-info-1 end -->
                                <div class="box-info-1 dark-bg">
                                    <div class="box-icon"><img src="{{ asset('frontend/images/files/about-us/box-info-1/img-3.png')}}" alt=""></div>
                                    <div class="box-content">
                                        <h5>Design & Build</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                    </div><!-- .box-content end -->
                                </div><!-- .box-info-1 end -->
                            </div><!-- .about-us-boxes-info end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === CTA Title 1 =========== -->
        <div class="parallax-section cta-title title-1" data-scroll-index="1" data-parallax-bg-img="" data-stellar-background-ratio="0.2">

            <div class="overlay-colored" data-bg-color="#ffc527" data-bg-color-opacity="0.5"></div><!-- .overlay-colored end -->
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="section-content">

                            <div class="col-md-10 col-md-offset-1">

                                <h1 class="title-big">
                                    <span>Great Experiences</span>
                                    <br>
                                    For Building and Reconstruction
                                </h1>
                                <a class="btn dark large hover-colorful" href="#">What We Do</a>

                            </div><!-- .col-md-10 end -->

                        </div><!-- .section-content end -->

                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-inner end -->

        </div><!-- .parallax-section end -->

        <!-- === Featured Projects =========== -->
        <div id="featured-projects" class="flat-section featured-projects" data-scroll-index="2">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center">
                                <h2>Our Featured Projects</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-12">

                            <div class="featured-projects-slider">
                                <ul class="owl-carousel">
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <h5><a href="portfolio-single-page.html">House of Cards</a><span class="colored">Living Room</span></h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust.</p>
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                        <h5><a href="portfolio-single-page.html">Rozay Kitchen</a><span class="colored">Kitchen</span></h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust.</p>
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                        <h5><a href="portfolio-single-page.html">Green House</a><span class="colored">Building</span></h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust.</p>
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                        <h5><a href="portfolio-single-page.html">House of Cards</a><span class="colored">Living Room</span></h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust.</p>
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                        <h5><a href="portfolio-single-page.html">Rozay Kitchen</a><span class="colored">Kitchen</span></h5>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust.</p>
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                </ul>
                            </div><!-- .featured-projects-slider end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->
        @php
        $chooses = App\Models\Choose::where('status', 1)->limit(4)->get();
        @endphp
        @php
        $choose_description = App\Models\ChooseDescription::where('status', 1)->limit(1)->get();
        @endphp
        <!-- === Why Choose Us =========== -->
        <div id="why-choose-us" class="flat-section why-choose-us" data-scroll-index="2">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        @foreach($choose_description as $choose_des)
                        <div class="col-md-6">

                            <div class="video-preview">
                                <a class="img-bg lightbox-iframe" href="{{ $choose_des->video }}">
                                    <img src="http://via.placeholder.com/600x350?text=Image" alt="">
                                </a><!-- .img-bg end -->
                                <a class="btn-video lightbox-iframe" href="{{ $choose_des->video }}">
                                    <i class="fa fa-play"></i>
                                </a><!-- .video-btn end -->
                            </div><!-- .video-preview end -->

                        </div><!-- .col-md-6 end -->
                        <div class="col-md-6">

                            <div class="section-title mt-50">
                                <h2>Why Choose Us</h2>
                                <p>
                                   {!! $choose_des->description_en !!}

                                </p>
                            </div><!-- .section-title end -->

                            <div class="row">
                             @foreach($chooses as $choose)
                                <div class="col-sm-6">

                                    <div class="box-info-2 mb-50">
                                        <div class="box-icon">{!! $choose->icon_url !!}</div>
                                        <div class="box-content">
                                            <h5>{{ $choose->title_en }}</h5>
                                            <p>{{ $choose->description_en }}</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-info-2 end -->

                                </div><!-- .col-md-6 end -->
                               @endforeach
                            </div><!-- .row end -->

                        </div><!-- .col-md-6 end -->
                        @endforeach
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === Our Services =========== -->
        <div id="our-services" class="flat-section our-services" data-scroll-index="3">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center">
                                <h2>Our Services</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-12">

                            <div class="img-preview img-bg anim-moveUp">
                                <img src="http://via.placeholder.com/1200x450?text=Image" alt="">
                            </div><!-- .img-preview end -->

                        </div><!-- .col-md-12 end -->
                        <div class="col-md-3 text-center">
                            <div class="box-preview-1 anim-moveUp mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Project Management</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-moveUp mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Tiling & Painting</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-moveUp mb-md-50">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Design & Build</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                        <div class="col-md-3 text-center">

                            <div class="box-preview-1 anim-moveUp">
                                <div class="box-img img-bg">
                                    <a href="#"><img src="http://via.placeholder.com/350x150?text=Image" alt=""></a>
                                </div><!-- .box-img end -->
                                <div class="box-content">
                                    <h5><a href="#">Building Renovation</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ever since the 1500s.</p>
                                </div><!-- .box-content end -->
                            </div><!-- .box-preview-1 end -->

                        </div><!-- .col-md-3 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === Our Works =========== -->
        <div id="our-works" class="flat-section our-works" data-scroll-index="4">

            <div class="portfolio-top"></div>
            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center">
                                <h2>Our Works</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        @php
                        $categories = App\Models\Category::where('status', 1)->latest()->get();
                        @endphp
                        <div class="col-md-12">

                            <ul class="portfolio-categories">
                                <li><a data-filter="*" class="active" href="#">All</a></li>
                                @foreach($categories as $cat)
                                <li><a data-filter=".pi-world-tour" href="{{ route('category.featured',$cat->id) }}">{{ $cat->category_name_en }}</a></li>
                                @endforeach
                            </ul>

                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

                <div class="portfolio-items-wrap">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="portfolio-items">
                                    <div class="portfolio-item pi-world-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay" href="#">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                        <div class="portfolio-single-link">
                                            <a class="open-portfolio-single" href="portfolio-single-1.html"></a>
                                        </div><!-- end portfolio-single-link -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-sport-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay" href="#">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                        <div class="portfolio-single-link">
                                            <a class="open-portfolio-single" href="portfolio-single-2.html"></a>
                                        </div><!-- end portfolio-single-link -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-summer-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay" href="#">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                        <div class="portfolio-single-link">
                                            <a class="open-portfolio-single" href="portfolio-single-3.html"></a>
                                        </div><!-- end portfolio-single-link -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-world-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay" href="#">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                        <div class="portfolio-single-link">
                                            <a class="open-portfolio-single" href="portfolio-single-4.html"></a>
                                        </div><!-- end portfolio-single-link -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-summer-tour pi-summer-trip">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay lightbox-gallery" href="{{ asset('frontend/images/files/portfolio/lightbox/img-5.jpg')}}">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-ocean-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay lightbox-gallery" href="{{ asset('frontend/images/files/portfolio/lightbox/img-6.jpg')}}">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-sport-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay lightbox-gallery" href="{{ asset('frontend/images/files/portfolio/lightbox/img-7.jpg')}}">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                    </div><!-- .portfolio-item -->
                                    <div class="portfolio-item pi-ocean-tour">
                                        <div class="preview img-bg">
                                            <img src="http://via.placeholder.com/450x300?text=Image" alt="">
                                        </div><!-- .preview end -->
                                        <a class="overlay lightbox-gallery" href="{{ asset('frontend/images/files/portfolio/lightbox/img-8.jpg')}}">
                                            <div class="overlay-inner">
                                                <span class="sub-title">Interior</span>
                                                <h4>Art Of Building</h4>
                                            </div><!-- .overlay-inner end -->
                                        </a><!-- .overlay end -->
                                    </div><!-- .portfolio-item -->
                                </div><!-- .portfolio-items end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .container-fluid end -->

                    <div class="portfolio-bottom"></div>
                    <div id="portfolio-single-wrap">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">

                                        <div class="portfolio-single-loader">
                                            <div class="loader-shape la-ball-clip-rotate la-dark">
                                                <div></div>
                                            </div>
                                        </div><!-- end portfolio-single-loader -->
                                        <div class="clearfix"></div>
                                        <div id="portfolio-single-content"></div>

                                </div><!-- .col-md-12 end -->
                            </div><!-- .row end -->
                        </div><!-- .container-fluid end -->

                    </div><!-- end portfolio-single-wrap -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="portfolio-cta-bottom">
                                    <h4><span class="colored">Feaured Works</span> Recommended to You to Explore it Today!</h4>
                                    <a href="#" class="loadmore-pi btn medium colorful hover-dark" data-text-loading="Now Loading" data-text-loading-finished="No More!">
                                        <span>Explore More</span>
                                        <div class="loader la-ball-clip-rotate la-sm">
                                            <div></div>
                                        </div>
                                    </a>
                                </div><!-- .portfolio-cta-bottom end -->

                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->

                </div><!-- .portfolio-items-wrap end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === Our Team =========== -->
        <div id="our-team" class="flat-section our-team" data-scroll-index="5">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center">
                                <h2>Our Great Team</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-12">

                            <div class="team-slider">
                                <ul class="owl-carousel">
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2 team-member">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x380?text=Image" alt=""></a>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <span class="sub-title">Founder</span>
                                                            <h4>Ahmed Hamdy</h4>
                                                        </div><!-- .overlay-inner end -->
                                                    </div><!-- .overlay end -->
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <ul class="social-icons">
                                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                                                        <li><a class="si-contact" href="#"><i class="fa fa-envelope"></i></a></li>
                                                    </ul><!-- .social-icons end -->
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2 team-member">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x380?text=Image" alt=""></a>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <span class="sub-title">Developer</span>
                                                            <h4>Morad Hamdy</h4>
                                                        </div><!-- .overlay-inner end -->
                                                    </div><!-- .overlay end -->
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <ul class="social-icons">
                                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                                                        <li><a class="si-contact" href="#"><i class="fa fa-envelope"></i></a></li>
                                                    </ul><!-- .social-icons end -->
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2 team-member">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x380?text=Image" alt=""></a>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <span class="sub-title">Designer</span>
                                                            <h4>Eslam Samer</h4>
                                                        </div><!-- .overlay-inner end -->
                                                    </div><!-- .overlay end -->
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <ul class="social-icons">
                                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                                                        <li><a class="si-contact" href="#"><i class="fa fa-envelope"></i></a></li>
                                                    </ul><!-- .social-icons end -->
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2 team-member">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x380?text=Image" alt=""></a>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <span class="sub-title">Founder</span>
                                                            <h4>Ahmed Hamdy</h4>
                                                        </div><!-- .overlay-inner end -->
                                                    </div><!-- .overlay end -->
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <ul class="social-icons">
                                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                                                        <li><a class="si-contact" href="#"><i class="fa fa-envelope"></i></a></li>
                                                    </ul><!-- .social-icons end -->
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="box-preview-2 team-member">
                                                <div class="box-img img-bg">
                                                    <a href="#"><img src="http://via.placeholder.com/350x380?text=Image" alt=""></a>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <span class="sub-title">Developer</span>
                                                            <h4>Morad Hamdy</h4>
                                                        </div><!-- .overlay-inner end -->
                                                    </div><!-- .overlay end -->
                                                </div><!-- .box-img end -->
                                                <div class="box-content">
                                                    <ul class="social-icons">
                                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="si-behance" href="#"><i class="fa fa-behance"></i></a></li>
                                                        <li><a class="si-contact" href="#"><i class="fa fa-envelope"></i></a></li>
                                                    </ul><!-- .social-icons end -->
                                                </div><!-- .box-content end -->
                                            </div><!-- .box-preview-2 end -->
                                        </div><!-- .slide end -->
                                    </li>
                                </ul>
                            </div><!-- .team-slider end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === Clients Testmonials =========== -->
        <div id="clients-testmonials" class="parallax-section cta-title clients-testmonials" data-scroll-index="5" data-parallax-bg-img="">

            <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.5"></div><!-- .overlay-colored end -->
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="section-content">

                            <div class="col-md-8 col-md-offset-2">

                                <div class="section-title text-center white">
                                    <h2>Our Clients</h2>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </p>
                                </div><!-- .section-title end -->

                            </div><!-- .col-md-8 end -->
                            <div class="col-md-12">

                                <div class="testmonials-slider">
                                    <ul class="owl-carousel">
                                        <li>
                                            <div class="slide">
                                                <div class="testmonial-single">
                                                    <div class="ts-img">
                                                        <img src="http://via.placeholder.com/70x70?text=Image" alt="">
                                                    </div><!-- .ts-img end -->
                                                    <h5 class="ts-person">Ahmed Hamdy</h5>
                                                    <div class="ts-content">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div><!-- .rating end -->
                                                    </div><!-- .ts-content end -->
                                                </div><!-- .testmonial-single end -->
                                            </div><!-- .slide end -->
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="testmonial-single">
                                                    <div class="ts-img">
                                                        <img src="http://via.placeholder.com/70x70?text=Image" alt="">
                                                    </div><!-- .ts-img end -->
                                                    <h5 class="ts-person">Morad Hamdy</h5>
                                                    <div class="ts-content">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div><!-- .rating end -->
                                                    </div><!-- .ts-content end -->
                                                </div><!-- .testmonial-single end -->
                                            </div><!-- .slide end -->
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="testmonial-single">
                                                    <div class="ts-img">
                                                        <img src="http://via.placeholder.com/70x70?text=Image" alt="">
                                                    </div><!-- .ts-img end -->
                                                    <h5 class="ts-person">Amr Sadek</h5>
                                                    <div class="ts-content">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div><!-- .rating end -->
                                                    </div><!-- .ts-content end -->
                                                </div><!-- .testmonial-single end -->
                                            </div><!-- .slide end -->
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="testmonial-single">
                                                    <div class="ts-img">
                                                        <img src="http://via.placeholder.com/70x70?text=Image" alt="">
                                                    </div><!-- .ts-img end -->
                                                    <h5 class="ts-person">Ahmed Hamdy</h5>
                                                    <div class="ts-content">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div><!-- .rating end -->
                                                    </div><!-- .ts-content end -->
                                                </div><!-- .testmonial-single end -->
                                            </div><!-- .slide end -->
                                        </li>
                                        <li>
                                            <div class="slide">
                                                <div class="testmonial-single">
                                                    <div class="ts-img">
                                                        <img src="http://via.placeholder.com/70x70?text=Image" alt="">
                                                    </div><!-- .ts-img end -->
                                                    <h5 class="ts-person">Morad Hamdy</h5>
                                                    <div class="ts-content">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div><!-- .rating end -->
                                                    </div><!-- .ts-content end -->
                                                </div><!-- .testmonial-single end -->
                                            </div><!-- .slide end -->
                                        </li>
                                    </ul>
                                </div><!-- .testmonials-slider end -->

                            </div><!-- .col-md-12 end -->

                        </div><!-- .section-content end -->

                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-inner end -->

        </div><!-- .parallax-section end -->

        <!-- === Contact Us =========== -->
        <div id="contact-us" class="flat-section contact-us" data-scroll-index="6">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="section-title text-center">
                                <h2>Contact Us</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div><!-- .section-title end -->

                        </div><!-- .col-md-8 end -->
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="box-contact-info text-center mb-md-40">
                                        <i class="fa fa-phone"></i>
                                        <h5>Our Phone</h5>
                                        <p>
                                            +440 875369208 - Office
                                            <br>
                                            +440 353363114 - Fax
                                        </p>
                                    </div><!-- .box-contact-info end -->

                                </div><!-- .col-md-4 end -->
                                <div class="col-md-4">

                                    <div class="box-contact-info text-center mb-md-40">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Our Office</h5>
                                        <p>
                                            795 South Park, Door 6
                                            <br>
                                            Wonderland, CA 94107, Australia
                                        </p>
                                    </div><!-- .box-contact-info end -->

                                </div><!-- .col-md-4 end -->
                                <div class="col-md-4">

                                    <div class="box-contact-info text-center">
                                        <i class="fa fa-envelope"></i>
                                        <h5>Our Email</h5>
                                        <p>
                                             support@sitename.com
                                            <br>
                                            info@sitename.com
                                        </p>
                                    </div><!-- .box-contact-info end -->

                                </div><!-- .col-md-4 end -->
                            </div><!-- .row end -->
                        </div><!-- .col-md-8 end -->
                        <div class="col-md-8 col-md-offset-2">

                            <form id="contact-form">
                                <div class="cf-notifications">
                                    <div class="cf-notifications-cont"></div>
                                </div><!-- end Contact Form Submit Message -->
                                <div class="form-group">
                                    <input type="text" name="cfName" id="cfName" class="form-control" placeholder="Your Name">
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="cfEmail" id="cfEmail" class="form-control" placeholder="Your Email">
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <textarea  name="cfMessage" id="cfMessage" class="form-control" placeholder="Your Message"></textarea>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="submit" class="form-control" value="Send Message">
                                </div><!-- .form-group end -->
                            </form><!-- #contact-form end -->

                        </div><!-- .col-md-8 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

        <!-- === Google Map =========== -->
        <div id="map"></div>

        <!-- === Our Clients =========== -->
        <div id="our-clients" class="flat-section our-clients" data-scroll-index="6">

            <div class="section-content">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="clients-slider">
                                <ul class="owl-carousel">
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-1.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-2.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-3.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-4.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-5.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-1.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                    <li>
                                        <div class="slide">
                                            <div class="client-single"><img src="{{ asset('frontend/images/files/sliders/clients/img-2.png')}}" alt=""></div>
                                        </div><!-- .slide end -->
                                    </li>
                                </ul>
                            </div><!-- .clients-slider end -->

                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->

            </div><!-- .section-content end -->

        </div><!-- .flat-section end -->

    </div><!-- #content-wrap -->

</section><!-- #content end -->
@endsection
