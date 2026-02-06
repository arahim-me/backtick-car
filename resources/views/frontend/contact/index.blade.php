<?php
use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('ja');
?>
@extends('layouts.master')

@section('page-title', $title)

@section('home_content')
    <section class=" flat-property pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-heading flex-two flex-wrap ">
                        <h1 class="heading-listing">{{ __('text.to_us.contact') }}</h1>
                        <div class="social-listing flex-six flex-wrap">
                            <p>{{ __('text.to_us.join') }}:</p>
                            <div class="icon-social style1">
                                <a href="https://facebook.com/groups/453311246539493"><i
                                        class="icon-autodeal-facebook"></i></a>
                                <a href="https://instagram.com/kur_uma_hanbai"><i class="fab fa-instagram"></i></a>
                                <a href="https://youtube.com/@INTEKcarhouse"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.goo-net.com/usedcar_shop/0404545/detail.html"><img class="icon"
                                        style="width: 15px" src="{{ asset('resources/assets/icon/goo-net.ico') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf-section-map">
        <div class="container-fluid">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.9792639936245!2d139.36568497532835!3d36.33705239367115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601f1f528aa9855d%3A0xd8f0244a16825fc7!2zSU5URUsg5ZCI5ZCM5Lya56S-!5e0!3m2!1sen!2sbd!4v1742427164310!5m2!1sen!2sbd"
                    width="100%" height="855px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>

    <section class="tf-section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 contact-left">
                    <div class="heading-section mb-30">
                        <h2>{{ __('contact.title.drop') }}</h2>
                        <p class="mt-12">
                            {{ __('contact.text.feel_free') }}
                        </p>
                    </div>
                    <div id="comments" class="comments">
                        <div class="respond-comment">
                            <form method="POST" id="loan-calculator" class="comment-form form-submit"
                                action="{{ route('message.store') }}" accept-charset="utf-8" novalidate="novalidate">
                                @csrf
                                <div class="grid-sw-2">
                                    <fieldset class="email-wrap style-text">
                                        <label class="font-1 fs-14 fw-5">{{ __('contact.subtitle.name') }}</label>
                                        <input type="text" class="tb-my-input" name="sender" placeholder="{{__('contact.subtitle.name')}}"
                                            required>
                                    </fieldset>
                                    <fieldset class="phone-wrap style-text">
                                        <label class="font-1 fs-14 fw-5">{{ __('contact.subtitle.email_addr') }}</label>
                                        <input type="email" class="tb-my-input" name="email" placeholder="{{__('contact.subtitle.email_addr')}}"
                                            required>
                                    </fieldset>
                                </div>
                                <div class="grid-sw-2">
                                    <fieldset class="email-wrap style-text">
                                        <label class="font-1 fs-14 fw-5">{{ __('contact.subtitle.phone_no') }}</label>
                                        <input type="tel" class="tb-my-input" name="phone" placeholder="{{__('contact.subtitle.phone_no')}}"
                                            required>
                                    </fieldset>
                                    <fieldset class="phone-wrap style-text">
                                        <label class="font-1 fs-14 fw-5">{{ __('contact.subtitle.subject') }}</label>
                                        <input type="text" class="tb-my-input" name="subject" placeholder="{{__('contact.subtitle.subject')}}"
                                            required>
                                    </fieldset>
                                </div>
                                <fieldset class="phone-wrap style-text">
                                    <label class="font-1 fs-14 fw-5">{{ __('contact.subtitle.your_message') }}</label>
                                    <textarea id="comment-message" name="body" rows="4" tabindex="4" placeholder="{{__('contact.subtitle.your_message')}}"></textarea>
                                </fieldset>

                                <div class="button-boxs">
                                    <button class="sc-button" name="submit" type="submit">
                                        <span>{{ __('button.send_message') }}</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact-right">
                    <x-contact-info></x-contact-info>

                </div>
            </div>
        </div>
    </section>
    <section class="tf-section">
        <div class="container">
            <div class="row">
                <div class="inner-heading">
                    <div class="heading-section mb-30">
                        <h2>{{ __('contact.title.one_line_about') }}</h2>
                        <p class="mt-12">
                            {{ __('contact.text.we_promise') }}
                            <a class="btn btn-warning"
                                href="{{ route('about.index') }}">{{ __('button.see_details') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Script></Script>
@endsection
