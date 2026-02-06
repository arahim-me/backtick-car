@extends('layouts.master')
@section('page-title', $title)
@section('home_content')
    <!-- widegt review car -->
    <section class="tf-section-banner2 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            News,
                            reviews &amp; Video</h2>
                        <a href="blog-grid.html" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">View
                            all<i class="icon-autodeal-btn-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="swiper review-car carousel-3 overflow-hidden swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-a21a7f86b7155cfa" aria-live="polite">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3"
                                style="width: 1296px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <div class="slider-item">
                                    <div class="img-slider">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="heading">
                                            <h1 class="text-color-1">2024 Hyundai <br> Staria Premium Review
                                            </h1>
                                            <p class="text-color-1 font fw-4">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nam non egestas justo.
                                                Vestibulum ac commodo enim, eget fringilla lectus.simply rent a
                                                car</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="sc-button"><span>Review detail</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3"
                                style="width: 1296px; opacity: 0; transform: translate3d(-1296px, 0px, 0px);">
                                <div class="slider-item">
                                    <div class="img-slider">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="heading">
                                            <h1 class="text-color-1">2025 Honda <br> Staria Premium Review</h1>
                                            <p class="text-color-1 font fw-4">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nam non egestas justo.
                                                Vestibulum ac commodo enim, eget fringilla lectus.simply rent a
                                                car</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="sc-button"><span>Review detail</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 3"
                                style="width: 1296px; opacity: 0; transform: translate3d(-2592px, 0px, 0px);">
                                <div class="slider-item">
                                    <div class="img-slider">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            src="{{ asset('resources') }}/assets/images/section/car-review.jpg"
                                            alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="heading">
                                            <h1 class="text-color-1">2024 Hyundai <br> Staria Premium Review
                                            </h1>
                                            <p class="text-color-1 font fw-4">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nam non egestas justo.
                                                Vestibulum ac commodo enim, eget fringilla lectus.simply rent a
                                                car</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="sc-button"><span>Review detail</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-next style-1" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-a21a7f86b7155cfa" aria-disabled="false"></div>
                    <div class="swiper-button-prev style-1 swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-a21a7f86b7155cfa" aria-disabled="true">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- widegt blog -->
    <section class="section-blog tf-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            News to
                            help choose your car</h2>
                        <a href="blog-grid.html" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">View
                            all<i class="icon-autodeal-btn-right"></i></a>
                    </div>
                    <div class="swiper-container overflow-visible tf-sw-mobile7" data-preview="2" data-space="30">
                        <div class="swiper-wrapper blog-article-grid list-car-grid-blog-2">
                            <div class="swiper-slide">
                                <div class="blog-article-item style2 hover-img">
                                    <div class="images img-style relative flex-none">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/blog/blog-15.jpg"
                                            src="{{ asset('resources') }}/assets/images/blog/blog-15.jpg" alt="images">
                                        <div class="date">January 28, 2024</div>
                                    </div>
                                    <div class="content">
                                        <div class="sub-box flex align-center fs-13 fw-6">
                                            <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                            <a href="#" class="category text-color-3">First Drives</a>
                                        </div>
                                        <h3><a href="blog-detail.html">Get Ready For A Diesel Mild-Hybrid Toyota
                                                Fortuner In...</a></h3>
                                        <p>The sub-4 metre SUV segment has been quite active over the last six
                                            months or so, with the launch of various facelifted...</p>
                                        <a href="blog-detail.html" class="read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-article-item style2 hover-img">
                                    <div class="images img-style relative flex-none">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/blog/blog-16.jpg"
                                            src="{{ asset('resources') }}/assets/images/blog/blog-16.jpg" alt="images">
                                        <div class="date">January 28, 2024</div>
                                    </div>
                                    <div class="content">
                                        <div class="sub-box flex align-center fs-13 fw-6">
                                            <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                            <a href="#" class="category text-color-3">First Drives</a>
                                        </div>
                                        <h3><a href="blog-detail.html">Get Ready For A Diesel Mild-Hybrid Toyota
                                                Fortuner In...</a></h3>
                                        <p>The sub-4 metre SUV segment has been quite active over the last six
                                            months or so, with the launch of various facelifted...</p>
                                        <a href="blog-detail.html" class="read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-article-item style2 hover-img">
                                    <div class="images img-style relative flex-none">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/blog/blog-17.jpg"
                                            src="{{ asset('resources') }}/assets/images/blog/blog-17.jpg" alt="images">
                                        <div class="date">January 28, 2024</div>
                                    </div>
                                    <div class="content">
                                        <div class="sub-box flex align-center fs-13 fw-6">
                                            <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                            <a href="#" class="category text-color-3">First Drives</a>
                                        </div>
                                        <h3><a href="blog-detail.html">Get Ready For A Diesel Mild-Hybrid Toyota
                                                Fortuner In...</a></h3>
                                        <p>The sub-4 metre SUV segment has been quite active over the last six
                                            months or so, with the launch of various facelifted...</p>
                                        <a href="blog-detail.html" class="read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-article-item style2 hover-img">
                                    <div class="images img-style relative flex-none">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/blog/blog-18.jpg"
                                            src="{{ asset('resources') }}/assets/images/blog/blog-18.jpg" alt="images">
                                        <div class="date">January 28, 2024</div>
                                    </div>
                                    <div class="content">
                                        <div class="sub-box flex align-center fs-13 fw-6">
                                            <a href="#" class="admin fw-7 text-color-2">Jerome Bell</a>
                                            <a href="#" class="category text-color-3">First Drives</a>
                                        </div>
                                        <h3><a href="blog-detail.html">Get Ready For A Diesel Mild-Hybrid Toyota
                                                Fortuner In...</a></h3>
                                        <p>The sub-4 metre SUV segment has been quite active over the last six
                                            months or so, with the launch of various facelifted...</p>
                                        <a href="blog-detail.html" class="read-more">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
