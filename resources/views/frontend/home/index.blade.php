@extends('layouts.master')
@section('page-title', $title)
@section('home_content')
    <!-- slider 3 -->
    <div
        class="swiper mainslider slider home3 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
        <div class="swiper-wrapper" id="swiper-wrapper-451f8671d1090c595" aria-live="off" style="transition-duration: 0ms;">
            {{-- <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2"
                style="width: 1423px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <div class="slider-item">
                    <div class="img-slider">
                        <img class="img-item lazyload" data-src="{{ asset('resources') }}/assets/images/slider/slide3.jpg"
                            src="{{ asset('resources') }}/assets/images/slider/slide3.jpg" alt="">
                    </div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content po-content-two">
                                    <div class="heading">
                                        <span
                                            class="fs-20 fw-3 lh-26 text-color-1 fade-item fade-item-1">{{ __('Over 95,000
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    classified ads listing') }}</span>
                                        <h1 class="text-color-1 fade-item fade-item-2">
                                            {{ __('Find what are you looking for') }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2"
                style="width: 1423px; opacity: 0; transform: translate3d(-1423px, 0px, 0px); transition-duration: 0ms;">
                <div class="slider-item">
                    <div class="img-slider">
                        <img class="img-item lazyload" data-src="{{ asset('resources') }}/assets/images/slider/slide4.jpg"
                            src="{{ asset('resources') }}/assets/images/slider/slide4.jpg" alt="">
                    </div>
                    <div class="container  relative">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content po-content-two">
                                    <div class="heading">
                                        <span
                                            class="fs-20 fw-3 lh-26 text-color-1 fade-item fade-item-1">{{ __('Over 95,000 classified ads listing') }}</span>
                                        <h1 class="text-color-1 fade-item fade-item-2">
                                            {{ __('Find what are you looking for') }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
            aria-controls="swiper-wrapper-a21a7f86b7155cfa" aria-disabled="false"></div>
        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide"
            aria-controls="swiper-wrapper-a21a7f86b7155cfa" aria-disabled="true"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <!-- filter -->
    <div class="flat-filter-search home3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="flat-tabs">
                        <div class="box-tab style2 center">
                            <ul class="menu-tab tab-title flex">
                                <li class="item-title style active">
                                    <span class="inner fs-16 fw-5 lh-20">All Car</span>
                                </li>
                                <li class="item-title style">
                                    <span class="inner fs-16 fw-5 lh-20">New Car</span>
                                </li>
                                <li class="item-title style">
                                    <span class="inner fs-16 fw-5 lh-20">Used Car</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-tab style2">
                            <div class="content-inner tab-content" style="">
                                <div class="form-sl">
                                    <form method="post">
                                        <div class="wd-find-select flex">
                                            <div class="inner-group">
                                                <div class="form-group-1">

                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span
                                                                class="current">Infinity</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Infinity
                                                                </li>
                                                                <li data-value="Audi" class="option">Audi</li>
                                                                <li data-value="BMW" class="option">BMW</li>
                                                                <li data-value="Dongfeng" class="option">
                                                                    Dongfeng</li>
                                                                <li data-value="Ford" class="option">Ford</li>
                                                                <li data-value="Foton" class="option">Foton</li>
                                                                <li data-value="Isuzu" class="option">Isuzu</li>
                                                                <li data-value="Kia" class="option">Kia</li>
                                                                <li data-value="Mercedes Benz" class="option">
                                                                    Mercedes Benz</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">

                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span
                                                                class="current">Sedanx50</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Sedanx50
                                                                </li>
                                                                <li data-value="A4" class="option">A4</li>
                                                                <li data-value="Almera" class="option">Almera
                                                                </li>
                                                                <li data-value="Bellett" class="option">Bellett
                                                                </li>
                                                                <li data-value="C-Class" class="option">C-Class
                                                                </li>
                                                                <li data-value="Camry" class="option">Camry</li>
                                                                <li data-value="Carnival" class="option">
                                                                    Carnival</li>
                                                                <li data-value="Mondeo-Sport" class="option">
                                                                    Mondeo Sport</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">

                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span
                                                                class="current">Door</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Door</li>
                                                                <li data-value="2" class="option">2</li>
                                                                <li data-value="4" class="option ">4</li>
                                                                <li data-value="6" class="option ">6</li>
                                                                <li data-value="8" class="option">8</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-1">

                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span
                                                                class="current">Sedan</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Sedan
                                                                </li>
                                                                <li data-value="Convertible" class="option">
                                                                    Convertible</li>
                                                                <li data-value="Coupe" class="option">Coupe</li>
                                                                <li data-value="Crossover" class="option">
                                                                    Crossover</li>
                                                                <li data-value="Hatchback" class="option">
                                                                    Hatchback</li>
                                                                <li data-value="Minivan" class="option">Minivan
                                                                </li>
                                                                <li data-value="Truck" class="option">Pickup
                                                                    Truck</li>
                                                                <li data-value="SUV" class="option">SUV</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-2 form-style">
                                                <a class="icon-filter pull-right ">
                                                    <svg width="20" height="18" viewBox="0 0 20 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.00002 6.84375V0.75C4.00002 0.551088 3.92101 0.360322 3.78035 0.21967C3.6397 0.0790178 3.44894 0 3.25002 0C3.05111 0 2.86035 0.0790178 2.71969 0.21967C2.57904 0.360322 2.50002 0.551088 2.50002 0.75V6.84375C1.85471 7.00898 1.28274 7.38428 0.874293 7.91048C0.465842 8.43669 0.244141 9.08387 0.244141 9.75C0.244141 10.4161 0.465842 11.0633 0.874293 11.5895C1.28274 12.1157 1.85471 12.491 2.50002 12.6562V17.25C2.50002 17.4489 2.57904 17.6397 2.71969 17.7803C2.86035 17.921 3.05111 18 3.25002 18C3.44894 18 3.6397 17.921 3.78035 17.7803C3.92101 17.6397 4.00002 17.4489 4.00002 17.25V12.6562C4.64533 12.491 5.2173 12.1157 5.62575 11.5895C6.0342 11.0633 6.25591 10.4161 6.25591 9.75C6.25591 9.08387 6.0342 8.43669 5.62575 7.91048C5.2173 7.38428 4.64533 7.00898 4.00002 6.84375ZM3.25002 11.25C2.95335 11.25 2.66334 11.162 2.41667 10.9972C2.16999 10.8324 1.97774 10.5981 1.8642 10.324C1.75067 10.0499 1.72097 9.74834 1.77885 9.45737C1.83672 9.16639 1.97958 8.89912 2.18936 8.68934C2.39914 8.47956 2.66642 8.3367 2.95739 8.27882C3.24836 8.22094 3.54996 8.25065 3.82405 8.36418C4.09814 8.47771 4.33241 8.66997 4.49723 8.91665C4.66205 9.16332 4.75002 9.45333 4.75002 9.75C4.75002 10.1478 4.59199 10.5294 4.31068 10.8107C4.02938 11.092 3.64785 11.25 3.25002 11.25ZM10.75 2.34375V0.75C10.75 0.551088 10.671 0.360322 10.5304 0.21967C10.3897 0.0790178 10.1989 0 10 0C9.80111 0 9.61034 0.0790178 9.46969 0.21967C9.32904 0.360322 9.25002 0.551088 9.25002 0.75V2.34375C8.60471 2.50898 8.03274 2.88428 7.62429 3.41048C7.21584 3.93669 6.99414 4.58387 6.99414 5.25C6.99414 5.91613 7.21584 6.56331 7.62429 7.08952C8.03274 7.61572 8.60471 7.99102 9.25002 8.15625V17.25C9.25002 17.4489 9.32904 17.6397 9.46969 17.7803C9.61034 17.921 9.80111 18 10 18C10.1989 18 10.3897 17.921 10.5304 17.7803C10.671 17.6397 10.75 17.4489 10.75 17.25V8.15625C11.3953 7.99102 11.9673 7.61572 12.3758 7.08952C12.7842 6.56331 13.0059 5.91613 13.0059 5.25C13.0059 4.58387 12.7842 3.93669 12.3758 3.41048C11.9673 2.88428 11.3953 2.50898 10.75 2.34375ZM10 6.75C9.70335 6.75 9.41334 6.66203 9.16667 6.4972C8.91999 6.33238 8.72773 6.09811 8.6142 5.82403C8.50067 5.54994 8.47097 5.24834 8.52884 4.95736C8.58672 4.66639 8.72958 4.39912 8.93936 4.18934C9.14914 3.97956 9.41642 3.8367 9.70739 3.77882C9.99836 3.72094 10.3 3.75065 10.574 3.86418C10.8481 3.97771 11.0824 4.16997 11.2472 4.41665C11.412 4.66332 11.5 4.95333 11.5 5.25C11.5 5.64782 11.342 6.02936 11.0607 6.31066C10.7794 6.59196 10.3978 6.75 10 6.75ZM19.75 12.75C19.7494 12.0849 19.5282 11.4388 19.121 10.9129C18.7139 10.387 18.1438 10.011 17.5 9.84375V0.75C17.5 0.551088 17.421 0.360322 17.2804 0.21967C17.1397 0.0790178 16.9489 0 16.75 0C16.5511 0 16.3603 0.0790178 16.2197 0.21967C16.079 0.360322 16 0.551088 16 0.75V9.84375C15.3547 10.009 14.7827 10.3843 14.3743 10.9105C13.9658 11.4367 13.7441 12.0839 13.7441 12.75C13.7441 13.4161 13.9658 14.0633 14.3743 14.5895C14.7827 15.1157 15.3547 15.491 16 15.6562V17.25C16 17.4489 16.079 17.6397 16.2197 17.7803C16.3603 17.921 16.5511 18 16.75 18C16.9489 18 17.1397 17.921 17.2804 17.7803C17.421 17.6397 17.5 17.4489 17.5 17.25V15.6562C18.1438 15.489 18.7139 15.113 19.121 14.5871C19.5282 14.0612 19.7494 13.4151 19.75 12.75ZM16.75 14.25C16.4534 14.25 16.1633 14.162 15.9167 13.9972C15.67 13.8324 15.4777 13.5981 15.3642 13.324C15.2507 13.0499 15.221 12.7483 15.2788 12.4574C15.3367 12.1664 15.4796 11.8991 15.6894 11.6893C15.8991 11.4796 16.1664 11.3367 16.4574 11.2788C16.7484 11.2209 17.05 11.2506 17.324 11.3642C17.5981 11.4777 17.8324 11.67 17.9972 11.9166C18.1621 12.1633 18.25 12.4533 18.25 12.75C18.25 13.1478 18.092 13.5294 17.8107 13.8107C17.5294 14.092 17.1478 14.25 16.75 14.25Z"
                                                            fill="CurrentColor"></path>
                                                    </svg>
                                                    <i class="icon-autodeal-plus search-icon fs-20"></i>
                                                </a>
                                            </div>
                                            <div class="button-search sc-btn-top">
                                                <a class="sc-button" href="#">
                                                    <span>Find cars</span>
                                                    <i class="fa-solid fa-magnifying-glass text-color-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wd-find-select wd-search-form ">
                                            <div class="box1 grid-4">
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Fuel type</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Fuel type
                                                                </li>
                                                                <li data-value="1" class="option">Fuel type</li>
                                                                <li data-value="2" class="option">Fuel type</li>
                                                                <li data-value="3" class="option">Fuel type</li>
                                                                <li data-value="4" class="option">Fuel type</li>
                                                                <li data-value="5" class="option">Fuel type</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Transmission</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">
                                                                    Transmission</li>
                                                                <li data-value="1" class="option">Transmission
                                                                </li>
                                                                <li data-value="2" class="option">Transmission
                                                                </li>
                                                                <li data-value="3" class="option">Transmission
                                                                </li>
                                                                <li data-value="4" class="option">Transmission
                                                                </li>
                                                                <li data-value="5" class="option">Transmission
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Driver type</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Driver
                                                                    type</li>
                                                                <li data-value="1" class="option">Driver type
                                                                </li>
                                                                <li data-value="2" class="option">Driver type
                                                                </li>
                                                                <li data-value="3" class="option">Driver type
                                                                </li>
                                                                <li data-value="4" class="option">Driver type
                                                                </li>
                                                                <li data-value="5" class="option">Driver type
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <input type="text" class="text-field" placeholder="Cylinder"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="box1 grid-4">
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0"><span
                                                                class="current">Color</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Color
                                                                </li>
                                                                <li data-value="1" class="option">Color</li>
                                                                <li data-value="2" class="option">Color</li>
                                                                <li data-value="3" class="option">Color</li>
                                                                <li data-value="4" class="option">Color</li>
                                                                <li data-value="5" class="option">Color</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="widget widget-price ">
                                                        <div class="caption flex-two">
                                                            <div>
                                                                <span id="slider-range-value1">km 100</span>
                                                                <span id="slider-range-value2">km 1,000,000</span>
                                                            </div>
                                                        </div>
                                                        <div id="slider-range"
                                                            class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                            <div class="noUi-base">
                                                                <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                                    <div class="noUi-handle noUi-handle-lower"></div>
                                                                </div>
                                                                <div class="noUi-origin noUi-background"
                                                                    style="left: 100%;">
                                                                    <div class="noUi-handle noUi-handle-upper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" slider-labels">
                                                            <div>
                                                                <input type="hidden" name="min-value" value="">
                                                                <input type="hidden" name="max-value" value="">
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget_price -->
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="widget widget-price ">
                                                        <div class="caption flex-two">
                                                            <div>
                                                                <span class="fw-6">Price: </span>
                                                                <span
                                                                    id="slider-range-value01">{{ __('button.currency_icon') }}
                                                                    0</span>
                                                                <span
                                                                    id="slider-range-value02">{{ __('button.currency_icon') }}
                                                                    50,000</span>
                                                            </div>
                                                        </div>
                                                        <div id="slider-range2"
                                                            class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                            <div class="noUi-base">
                                                                <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                                    <div class="noUi-handle noUi-handle-lower"></div>
                                                                </div>
                                                                <div class="noUi-origin noUi-background"
                                                                    style="left: 100%;">
                                                                    <div class="noUi-handle noUi-handle-upper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-labels">
                                                            <div>
                                                                <input type="hidden" name="min-value2" value="">
                                                                <input type="hidden" name="max-value2" value="">
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget_price -->
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="widget widget-price ">
                                                        <div class="caption flex-two">
                                                            <div>
                                                                <span class="fw-6">Year: </span>
                                                                <span id="slider-range-value03">2,000</span>
                                                                <span id="slider-range-value04">2,025</span>
                                                            </div>
                                                        </div>
                                                        <div id="slider-range3"
                                                            class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                            <div class="noUi-base">
                                                                <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                                    <div class="noUi-handle noUi-handle-lower"></div>
                                                                </div>
                                                                <div class="noUi-origin noUi-background"
                                                                    style="left: 100%;">
                                                                    <div class="noUi-handle noUi-handle-upper"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-labels">
                                                            <div>
                                                                <input type="hidden" name="min-value3" value="">
                                                                <input type="hidden" name="max-value3" value="">
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget_price -->
                                                </div>
                                            </div>
                                            <div class="box1 grid-4">
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Door</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Door</li>
                                                                <li data-value="1" class="option">Door</li>
                                                                <li data-value="2" class="option">Door</li>
                                                                <li data-value="3" class="option">Door</li>
                                                                <li data-value="4" class="option">Door</li>
                                                                <li data-value="5" class="option">Door</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Seat</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Seat</li>
                                                                <li data-value="1" class="option">Seat</li>
                                                                <li data-value="2" class="option">Seat</li>
                                                                <li data-value="3" class="option">Seat</li>
                                                                <li data-value="4" class="option">Seat</li>
                                                                <li data-value="5" class="option">Seat</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <div class="group-select">
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">Ownership</span>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">
                                                                    Ownership</li>
                                                                <li data-value="1" class="option">Ownership
                                                                </li>
                                                                <li data-value="2" class="option">Ownership
                                                                </li>
                                                                <li data-value="3" class="option">Ownership
                                                                </li>
                                                                <li data-value="4" class="option">Ownership
                                                                </li>
                                                                <li data-value="5" class="option">Ownership
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group wg-box3">
                                                    <input type="text" class="text-field" placeholder="Cylinder"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="boder-wg"></div>
                                            <div class="features-wrap">
                                                <h5>Features</h5>
                                                <div class="box2 grid-5">
                                                    <div class="form-group wg-box4">
                                                        <div class="title fs-16 fw-5 lh-20 text-color-2">Request
                                                            Price Label</div>
                                                        <div class="tf-amenities bg-white">
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">A/C:
                                                                    Front</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Backup
                                                                    Camera</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Cruise
                                                                    Control</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Navigation</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Power
                                                                    Locks</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group wg-box4">
                                                        <div class="title fs-16 fw-5 lh-20 text-color-2">
                                                            Entertainment</div>
                                                        <div class="tf-amenities bg-white">
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Audio
                                                                    system</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Touchscreen
                                                                    display</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">GPS
                                                                    navigation</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Phone
                                                                    connectivity</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">In-car
                                                                    Wi-Fi</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group wg-box4">
                                                        <div class="title fs-16 fw-5 lh-20 text-color-2">Safety
                                                        </div>
                                                        <div class="tf-amenities bg-white">
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Anti-lock
                                                                    brake
                                                                    system (ABS):</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Electronic
                                                                    stability
                                                                    control (ESC)</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Brake assist
                                                                    (BA)</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Airbags</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Blind spot
                                                                    monitoring
                                                                    system (BSM)</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group wg-box4">
                                                        <div class="title fs-16 fw-5 lh-20 text-color-2">
                                                            Interior</div>
                                                        <div class="tf-amenities bg-white">
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Premium
                                                                    leather
                                                                    seats</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Wood
                                                                    trim</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Mini
                                                                    bar</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Rear seat
                                                                    ventilation
                                                                    system</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Large
                                                                    infotainment
                                                                    screen</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group wg-box4">
                                                        <div class="title fs-16 fw-5 lh-20 text-color-2">
                                                            Exterior</div>
                                                        <div class="tf-amenities bg-white">
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Chrome-plated
                                                                    grill</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Smart
                                                                    headlight
                                                                    cluster</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Premium
                                                                    wheels</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">Body character
                                                                    lines</span>
                                                            </label>
                                                            <label class="flex-three">
                                                                <input name="newsletter" type="checkbox">
                                                                <span class="btn-checkbox"></span>
                                                                <span class="text-color-2 font-2">High-quality
                                                                    paint</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Job  Search Form-->
                                </div>
                            </div>
                        </div>
                        <div class="wrap-icon flex align-center link-style-3 flex-wrap">
                            <div class="icon-box text-color-1 font">
                                <span class="icon-autodeal-suv"></span>
                                <a href="#">SUV</a>
                            </div>
                            <div class="icon-box text-color-1 font">
                                <span class="icon-autodeal-coupe"></span>
                                <a href="#">Coupe</a>
                            </div>
                            <div class="icon-box text-color-1 font">
                                <span class="icon-autodeal-hatchback"></span>
                                <a href="#">Hatchback</a>
                            </div>
                            <div class="icon-box text-color-1 font">
                                <span class="icon-autodeal-hybrid"></span>
                                <a href="#">Hybrid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- widegt categori -->
    {{-- <section class="tf-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            Popular
                            Car Makes &amp; Body Types</h2>
                        <div class="flex-six gap-20 flex-wrap">
                            <a href="#" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                                data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">Car
                                makes<i class="icon-autodeal-btn-right"></i></a>
                            <a href="#" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.3s"
                                data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.3s; animation-name: fadeInUpSmall;">Car
                                body types<i class="icon-autodeal-btn-right"></i></a>
                            <a href="{{ route('car.index') }}" class="tf-btn-arrow wow fadeInUpSmall"
                                data-wow-delay="0.3s" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.3s; animation-name: fadeInUpSmall;">View
                                all<i class="icon-autodeal-btn-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div
                        class="swiper partner-slide overflow-hidden swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-cfc926edb01037179" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list1.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list1.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Sedan</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list2.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list2.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Hatchback</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list3.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list3.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Pickup Truck</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list4.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list4.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">SUV</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list5.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list5.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Crossover</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="6 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list6.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list6.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Minivan</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="7 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list7.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list7.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Station wagon</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="8 / 8"
                                style="width: 191px; margin-right: 30px;">
                                <a href="#" class="partner-item style-3">
                                    <div class="image">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/icon-box/car-list8.png"
                                            src="{{ asset('resources') }}/assets/images/icon-box/car-list8.png"
                                            alt="images">
                                    </div>
                                    <div class="content center">
                                        <div class="fs-16 fw-6 title text-color-2 font-2">Convertible</div>
                                        <span class="sub-title fs-12 fw-4 font-2">271 Car</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- widegt List car -->
    <section class="tf-section3 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section flex align-center justify-space flex-wrap gap-20">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            {{ __('Used Cars By Body Type') }}
                        </h2>
                        <a href="{{ route('car.index') }}" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">{{ __('button.view_all') }}<i
                                class="icon-autodeal-btn-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="flat-tabs themesflat-tabs">
                        <div class="box-tab center">
                            <ul class="menu-tab tab-title style flex">
                                @foreach ($categories as $category)
                                    <li class="item-title">
                                        <h5 class="inner"><a
                                                href="{{ route('query.by.category', $category->id) }}">{{ $category->name }}</a>
                                        </h5>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="content-tab">
                            <div class="content-inner tab-content" style="">
                                <div class="list-car-grid-2">

                                    @foreach ($cars as $car)
                                        <div class="box-car-list style-2 hv-one">
                                            <div class="image-group relative ">
                                                <div class="top flex-two">
                                                    <ul class="d-flex gap-8">
                                                        <li class="flag-tag success">
                                                            {{ $car->status == 'active' ? __('In Stock') : 'Out of stock' }}
                                                        </li>
                                                        <li class="flag-tag style-1">
                                                            <div class="icon">
                                                                <svg width="16" height="13" viewBox="0 0 16 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                                                        stroke="white" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            {{-- @php
                                                             foreach ($car->image as $images) {
                                                                    $i = $loop;
                                                                }
                                                            @endphp
                                                            {{ $i->count }} --}}
                                                        </li>
                                                    </ul>
                                                    <div class="year flag-tag">{{ __($car->year) }}</div>
                                                </div>
                                                <ul class="change-heart flex">
                                                    <li class="box-icon w-32">
                                                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                            aria-controls="offcanvasBottom" class="icon">
                                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25"
                                                                    stroke="CurrentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="box-icon w-32">
                                                        <a href="{{ route('favorite.store', $car->id) }}" class="icon">
                                                            <svg width="18" height="16" viewBox="0 0 18 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.5 4.875C16.5 2.80417 14.7508 1.125 12.5933 1.125C10.9808 1.125 9.59583 2.06333 9 3.4025C8.40417 2.06333 7.01917 1.125 5.40583 1.125C3.25 1.125 1.5 2.80417 1.5 4.875C1.5 10.8917 9 14.875 9 14.875C9 14.875 16.5 10.8917 16.5 4.875Z"
                                                                    stroke="CurrentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="img-style">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('uploads/products/thumbnails') }}/{{ $car->thumbnail }}"
                                                        src="{{ asset('uploads/products/thumbnails/') }}{{ $car->thumbnail }}"
                                                        alt="image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text-address">
                                                    <p class="text-color-3 font">
                                                        {{ $car->brand_name ? __($car->brand_name) : '' }}
                                                    </p>
                                                </div>
                                                <h5 class="link-style-1">
                                                    <a href="{{ route('listing.details', $car->id) }}">{{ $car->model->name }} || {{ $car->title}}</a>
                                                </h5>
                                                <div class="icon-box flex flex-wrap">
                                                    <div class="icons flex-three">
                                                        <i class="icon-autodeal-km1"></i>
                                                        <span>{{ $car->transmision ? __($car->transmision) : '' }}
                                                            kms</span>
                                                    </div>
                                                    <div class="icons flex-three">
                                                        <i class="icon-autodeal-diesel"></i>
                                                        <span>{{ $car->fuel_type ? __($car->fuel_type) : '' }}</span>
                                                    </div>
                                                    <div class="icons flex-three">
                                                        <i class="icon-autodeal-automatic"></i>
                                                        <span>{{ $car->driver_type ? __($car->driver_type) : '' }}</span>
                                                    </div>
                                                </div>
                                                <div class="money fs-20 fw-5 lh-25 text-color-3">
                                                    {{ $car->currency }}{{ $car->price }}
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <div class="img-author">
                                                        <img class="lazyload"
                                                            data-src="{{ asset('uploads') }}/{{ $car->seller->image ? 'default/profile.png' : 'profiles/' . $car->seller->image }}"
                                                            src="{{ asset('uploads') }}/{{ $car->seller->image ? 'default/profile.png' : 'profiles/' . $car->seller->image }}"
                                                            alt="image">
                                                        <span
                                                            class="font text-color-2 fw-5">{{ $car->seller->name ? __($car->seller->name) : '' }}</span>
                                                    </div>
                                                    <a href="{{ route('listing.details', $car->id) }}"
                                                        class="view-car">{{ __('button.view_car') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- widegt why-choose-us -->
    <x-why-choose></x-why-choose>



    <!-- widegt loan-calculator -->


    <!-- widegt team -->
    {{-- <section class="tf-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            Meet Our
                            Agents</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="sale-agents-detail.html">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/img-box/team1.jpg"
                                    src="{{ asset('resources') }}/assets/images/img-box/team1.jpg" alt="images">
                            </a>
                            <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="sale-agents-detail.html">Arlene McCoy</a></h3>
                                <p class=" text-color-2">Administrative Staff</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:themes@gmail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="sale-agents-detail.html">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/img-box/team2.jpg"
                                    src="{{ asset('resources') }}/assets/images/img-box/team2.jpg" alt="images">
                            </a>
                            <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="sale-agents-detail.html">Ronald Richards</a>
                                </h3>
                                <p class=" text-color-2">Administrative Staff</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:themes@gmail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="sale-agents-detail.html">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/img-box/team3.jpg"
                                    src="{{ asset('resources') }}/assets/images/img-box/team3.jpg" alt="images">
                            </a>
                            <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="sale-agents-detail.html">Leslie Alexander</a>
                                </h3>
                                <p class=" text-color-2">Administrative Staff</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:themes@gmail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="sale-agents-detail.html">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/img-box/team4.jpg"
                                    src="{{ asset('resources') }}/assets/images/img-box/team4.jpg" alt="images">
                            </a>
                            <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="sale-agents-detail.html">Cody Fisher</a></h3>
                                <p class=" text-color-2">Administrative Staff</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:themes@gmail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box-text flex justify-center mt-15 flex-wrap center">
                        <p>Become an agent and get the commission you deserve. </p> <a href="contact.html"
                            class="text-color-3 font-2 "> Contact us</a>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    <!-- image box -->
    {{-- <section class="tf-section-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tf-image-box style2 bg-black flex-three ">
                        <div class="image">
                            <img class="lazyload"
                                data-src="{{ asset('resources') }}/assets/images/img-box/find-car-4.png"
                                src="{{ asset('resources') }}/assets/images/img-box/find-car-4.png" alt="images">
                        </div>
                        <div class="content">
                            <h2 class="text-color-1"><a href="#">Down load our app</a></h2>
                            <p class="text-color-1">Whether you're buying, selling, or simply researching cars,
                                AutoDecar is the app for you.</p>
                            <div class="flex gap-8">
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="{{ asset('resources') }}/assets/images/section/app-store.png"
                                        src="{{ asset('resources') }}/assets/images/section/app-store.png"
                                        alt="images">
                                </a>
                                <a href="#">
                                    <img class="lazyload"
                                        data-src="{{ asset('resources') }}/assets/images/section/google-play.png"
                                        src="{{ asset('resources') }}/assets/images/section/google-play.png"
                                        alt="images">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tf-image-box style2 bg-orange flex-three ">
                        <div class="image">
                            <img class="lazyload"
                                data-src="{{ asset('resources') }}/assets/images/img-box/find-car-4.png"
                                src="{{ asset('resources') }}/assets/images/img-box/find-car-4.png" alt="images">
                        </div>
                        <div class="content">
                            <h2 class="text-color-1"><a href="#">Are you looking for a car?</a></h2>
                            <p class="text-color-1">Save time and effort as you no longer need to visit multiple
                                stores to find the right car.</p>
                            <a href="#" class="find-cars">
                                <span>Find cars</span>
                                <i class="icon-autodeal-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- widegt tetimonial -->
    <section class="tf-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            We love
                            our clients</h2>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div
                        class="swiper-container carousel-6 mask-0-3 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper " id="swiper-wrapper-bd584483d867e1070" aria-live="polite"
                            style="transition-duration: 0ms; transform: translate3d(-1113.29px, 0px, 0px);">
                            @forelse ($testimonials as $testimonial)
                                <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 9"
                                    style="width: 302.326px; margin-right: 30px;">
                                    <div class="tf-testimonial box-tes">
                                        <div class="inner-top flex-two">
                                            <div class="icon-star fs-12">
                                                <i
                                                    class="fas fa-star {{ $testimonial->rating >= 1 ? 'text-color-3' : '' }}"></i>
                                                <i
                                                    class="fas fa-star {{ $testimonial->rating >= 2 ? 'text-color-3' : '' }}"></i>
                                                <i
                                                    class="fas fa-star {{ $testimonial->rating >= 3 ? 'text-color-3' : '' }}"></i>
                                                <i
                                                    class="fas fa-star {{ $testimonial->rating >= 4 ? 'text-color-3' : '' }}"></i>
                                                <i
                                                    class="fas fa-star {{ $testimonial->rating == 5 ? 'text-color-3' : '' }}"></i>
                                            </div>
                                            <p class="fs-12">{{ $testimonial->updated_at->format('M-d-Y') }}</p>

                                        </div>
                                        <p class="fs-16 lh-22 text-color-2">"{{ $testimonial->text }}"</p>
                                        <div class="author-box flex">
                                            <div class="images">
                                                <img class="lazyload"
                                                    data-src="{{ asset('uploads') }}/{{ $testimonial->user_id ? 'profiles/' . $testimonial->reviewer->image : 'default/profile.png' }}"
                                                    src="{{ asset('uploads') }}/{{ $testimonial->user_id ? 'profiles/' . $testimonial->reviewer->image : 'default/profile.png' }}"
                                                    alt="images">
                                            </div>
                                            <div class="content">
                                                <h5>{{ $testimonial->user_id ? $testimonial->reviewer->name : $testimonial->name }}
                                                </h5>
                                                <p class="fs-12 lh-16 text-capitalize">
                                                    {{ $testimonial->user_id ? $testimonial->reviewer->role : 'User' }}{{ ' of INTEK LLC' }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h5>No Reviews yet</h5>
                            @endforelse
                        </div>
                        <div class="swiper-pagination3 swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1"></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                            {{ __('Our Export Cars') }}
                        </h2>
                        <a href="{{ route('car.index') }}" class="tf-btn-arrow wow fadeInUpSmall" data-wow-delay="0.2s"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">{{ __('View
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    all') }}<i
                                class="icon-autodeal-btn-right"></i></a>
                    </div>
                    <div class="swiper-container overflow-visible tf-sw-mobile7" data-preview="2" data-space="30">
                        <div class="swiper-wrapper blog-article-grid list-car-grid-blog-2">


                            @foreach ($export_cars as $car)
                                <div class="swiper-slide">
                                    <div class="blog-article-item style2 hover-img">
                                        <div class="images img-style relative flex-none">
                                            @if ($car->image != null)
                                                <img class="lazyload"
                                                    data-src="{{ asset('uploads/products/exports') }}/{{ $car->image }}"
                                                    src="{{ asset('uploads/products/exports') }}/{{ $car->image }}"
                                                    alt="image">
                                            @else
                                                <img class="lazyload"
                                                    data-src="{{ asset('uploads/default') }}/image-gallery.png"
                                                    src="{{ asset('uploads/default') }}/image-gallery.png"
                                                    alt="image">
                                            @endif
                                            <div class="date">{{ $car->updated_at->format('M-d-Y') }}</div>
                                        </div>
                                        <div class="content">
                                            <div class="sub-box flex align-center fs-13 fw-6">
                                                <a href="#"
                                                    class="admin fw-7 text-color-2">{{ $car->model ? __($car->model) : '' }}</a>
                                                <a href="#"
                                                    class="category text-color-3">{{ $car->brand_name ? __($car->brand_name) : '' }}</a>
                                            </div>
                                            <div class="sub-box flex align-center fs-13 fw-6">
                                                <a href="#" class="admin fw-7 text-color-2">{{ __('To:') }}
                                                    {{ $car->export_to ? __($car->export_to) : '' }}</a>
                                                <a href="#" class="category text-color-3">{{ 'By:' }}
                                                    {{ $car->seller->name ? __($car->seller->name) : '' }}</a>
                                            </div>
                                            <h3><a href="blog-detail.html">{{ $car->title ? __($car->title) : '' }}</a>
                                            </h3>
                                            @if (strlen(strip_tags($car->description ? __($car->description) : '')) > 100)
                                                {{ substr(strip_tags($car->description ? __($car->description) : ''), 0, 100) }}
                                                <p>
                                                    <a href="#" class="read-more">{{ __('...Read more') }}</a>
                                                </p>
                                            @else
                                                <p>{{ $car->description ? __($car->description) : '' }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- logo -->
    {{-- <section class="flat-brand tf-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-section center">
                        <h2 class="wow fadeInUpSmall" data-wow-delay="0.2s" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.2s; animation-name: fadeInUpSmall;">
                            Our
                            partners</h2>
                    </div>
                    <div
                        class="swiper-container carousel-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-ff98efb49edd517e" aria-live="off"
                            style="transform: translate3d(-2652px, 0px, 0px); transition-duration: 10000ms;">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('uploads/partners/asnet.png') }}"
                                            src="{{ asset('uploads/partners/asnet.png') }}"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                role="group" aria-label="2 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                role="group" aria-label="3 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                role="group" aria-label="4 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                role="group" aria-label="5 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="5" role="group" aria-label="6 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0"
                                role="group" aria-label="1 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par1.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par1.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1"
                                role="group" aria-label="2 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="5" role="group"
                                aria-label="6 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
                                data-swiper-slide-index="0" role="group" aria-label="1 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par1.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par1.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next"
                                data-swiper-slide-index="1" role="group" aria-label="2 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par2.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                role="group" aria-label="3 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par3.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                role="group" aria-label="4 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par4.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                role="group" aria-label="5 / 6" style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par5.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="5" role="group" aria-label="6 / 6"
                                style="width: 191px; margin-right: 30px;">
                                <div class="slogan-logo">
                                    <a href="#">
                                        <img class="lazyload"
                                            data-src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            src="{{ asset('resources') }}/assets/images/partner/par6.png"
                                            alt="images">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
