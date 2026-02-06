@extends('layouts.master')
@section('page-title', $title)
@section('home_content')
    {{-- Top section --}}
    <section class=" flat-property pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-heading flex-two flex-wrap ">
                        <h1 class="heading-listing">{{ __('about.title.about_us') }}</h1>
                        <div class="social-listing flex-six flex-wrap">
                            <p>{{ __('text.to_us.find') }} :</p>
                            {{-- <div class="icon-social style1">
                                <a href="https://facebook.com/groups/453311246539493"><i
                                        class="icon-autodeal-facebook"></i></a>
                                <a href="https://instagram.com/kur_uma_hanbai"><i class="fab fa-instagram"></i></a>
                                <a href="https://youtube.com/@INTEKcarhouse"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.goo-net.com/usedcar_shop/0404545/detail.html"><img class="icon"
                                        style="width: 15px" src="{{ asset('resources/assets/icon/goo-net.ico') }}"
                                        alt=""></a>
                            </div> --}}
                            <x-social-icon></x-social-icon>
                        </div>
                        <div class="social-listing flex-six flex-wrap">
                            <p>{{ __('text.to_us.call') }} :</p>
                            {{-- <div class="icon-social style1">
                                <div class="btn-contact flex-two">
                                    <a href="tel:0276604005" class="btn-pf bg-orange">
                                        <i class="icon-autodeal-phone2"></i>
                                        <span class="fs-16 fw-5 lh-20 font text-color-1">{{ __('Call') }}</span>
                                    </a>
                                    <a href="https://line.me/ti/p/FvR-gbS4Js" class="btn-pf bg-green">
                                        <i class="fab fa-line" style="font-size: 20px"></i>
                                        <span class="fs-16 fw-5 lh-20 font text-color-1">{{ __('Line') }}</span>
                                    </a>
                                    <a href="https://wa.me/+818067695333" class="btn-pf bg-green">
                                        <i class="fab fa-whatsapp" style="font-size: 20px"></i>
                                        <span class="fs-16 fw-5 lh-20 font text-color-1">{{ __('WhatsApp') }}</span>
                                    </a>
                                </div>
                            </div> --}}
                            <x-call-icon></x-call-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- widegt why-choose-us -->
    <x-why-choose></x-why-choose>

    {{-- About Company --}}
    <section class="tf-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2>{{ __('about.title.about_company') }}</h2>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-3 col-3">
                        <div class="tf-team box hover-img">
                            <div class="images relative img-style">
                                <a href="#">
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
                                    <h3 class="link-style-1"><a href="#">Arlene McCoy</a></h3>
                                    <p class=" text-color-2">Administrative Staff</p>
                                </div>
                                <div class="icon-box flex">
                                    <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                    <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-6 m-auto">
                        <p>{{ __('about.subtitle.about_company') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- About CEO --}}
    <section class="tf-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2>{{ __('about.title.about_ceo') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-3">
                        <div class="tf-team box hover-img">
                            <div class="images relative img-style">
                                <a href="#">
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
                                    <h3 class="link-style-1"><a href="#">{{ __('ROY BIKASH RANJAN') }}</a>
                                    </h3>
                                    <p class=" text-color-2">{{ __('CEO of INTEK LLC') }}</p>
                                </div>
                                <div class="icon-box flex">
                                    <a href="tel:0123456789"><i class="fas fa-phone-alt"></i></a>
                                    <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <p>{{ __('about.subtitle.about_ceo') }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- Meet Employees --}}
    <section class="tf-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section text-capitalize center">
                        <h2>{{ __('about.title.our_corporate_partners') }}</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="#">
                                <img class="lazyloaded" data-src="{{ asset('resources') }}/assets/images/partner/mirive-logo.jpg"
                                    src="{{ asset('resources') }}/assets/images/partner/mirive-logo.jpg" alt="images">
                            </a>
                            {{-- <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="#">{{ __('MIRIVE') }}</a>
                                </h3>
                                <p class=" text-color-2">{{ __('Auction partner') }}</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:08067695333"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="#">
                                <img class="lazyloaded" data-src="{{ asset('resources') }}/assets/images/partner/ju-auction-logo.svg"
                                    src="{{ asset('resources') }}//assets/images/partner/ju-auction-logo.svg" alt="images">
                            </a>
                            {{-- <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="#">{{ __('JU AUCTION') }}</a>
                                </h3>
                                <p class=" text-color-2">{{ __('Auction partner') }}</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:08067695333"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="#">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/partner/uss-auto-auction-logo.png"
                                    src="{{ asset('resources') }}/assets/images/partner/uss-auto-auction-logo.png" alt="images">
                            </a>
                            {{-- <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="#">{{ __('USS AUTO AUCTION') }}</a>
                                </h3>
                                <p class=" text-color-2">{{ __('Auction partner') }}</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:08067695333"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="#">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/partner/arai-auction-logo.png"
                                    src="{{ asset('resources') }}/assets/images/partner/arai-auction-logo.png" alt="images">
                            </a>
                            {{-- <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="#">{{ __('ARAI AUCTION') }}</a>
                                </h3>
                                <p class=" text-color-2">{{ __('Auction partner') }}</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:08067695333"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="tf-team box hover-img">
                        <div class="images relative img-style">
                            <a href="#">
                                <img class="lazyloaded"
                                    data-src="{{ asset('resources') }}/assets/images/partner/asnet-logo.png"
                                    src="{{ asset('resources') }}/assets/images/partner/asnet-logo.png" alt="images">
                            </a>
                            {{-- <div class="icon-socials">
                                <a href="#"><i class="icon-autodeal-facebook"></i></a>
                                <a href="#"><i class="icon-autodeal-twitter"></i></a>
                                <a href="#"><i class="icon-autodeal-linkedin"></i></a>
                                <a href="#"><i class="icon-autodeal-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="content flex-two">
                            <div class="inner">
                                <h3 class="link-style-1"><a href="#">{{ __('ASNET AUTO SERVER') }}</a>
                                </h3>
                                <p class=" text-color-2">{{ __('Auction partner') }}</p>
                            </div>
                            <div class="icon-box flex">
                                <a href="tel:08067695333"><i class="fas fa-phone-alt"></i></a>
                                <a href="info:intekcarhouse@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                            <div class="box-text flex justify-center mt-15 center flex-wrap">
                                <p>Become an agent and get the commission you deserve. </p> <a href="contact.html" class="text-color-3 font-2 "> Contact us</a>
                            </div>
                        </div> --}}
            </div>

        </div>
    </section>
    {{-- Contact Infomation --}}
    <div class="container col-md-6 m-auto pb-5" style="max-width: 600px;">
        <x-contact-info></x-contact-info>
    </div>

@endsection
