@extends('layouts.dashboardmaster')
@section('page-title', $title)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-3">My favorite</h1>

                        <div class="tfcl-favorite-listing">

                            <div class="controller-sorting mb-3">
                                <div class="count-list">
                                    <span>{{ $favorite_cars->count() }}</span> Car listing
                                </div>
                                <div class="sorting-input">
                                    <div class="label">Sort By</div>
                                    <div class="nice-select form-control" tabindex="0">
                                        <span class="current">Newest</span>
                                        <ul class="list">
                                            <li class="option">New</li>
                                            <li class="option"> Old </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-favorite-listing">

                                @forelse  ($favorite_cars as $car)
                                    <div class="box-car-list hv-one">
                                        <div class="image-group relative ">
                                            <div class="img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('uploads/products/') }}/assets/images/car-list/car4.jpg"
                                                    src="{{ asset('uploads') }}/{{ $car->favorite_cars->thumbnail ? 'products/thumbnail/' . $car->favorite_cars->thumbnail : 'default/image-gallery.png' }}"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="text-address" style="display: flex; justify-content: space-between; align-items: center;">
                                                <p class="text-color-3 font">{{ $car->favorite_cars->brand_name }}</p>
                                                <a href="{{ route('favorite.destroy', $car->id) }}"><i class="fas fa-trash text-danger"></i></a>
                                            </div>
                                            <h5 class="link-style-1">
                                                <a href="{{ route('listing.details', $car->favorite_cars->id) }}">{{ $car->favorite_cars->brand_name }}
                                                    |
                                                    {{ $car->favorite_cars->model }} |
                                                    {{ $car->favorite_cars->title }}</a>
                                            </h5>
                                            <div class="icon-box flex flex-wrap">
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-km1"></i>
                                                    <span>{{ $car->favorite_cars->transmision }} kms</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-diesel"></i>
                                                    <span>{{ $car->favorite_cars->fuel_type }}</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-automatic"></i>
                                                    <span>{{ $car->favorite_cars->driver_type }}</span>
                                                </div>
                                            </div>
                                            <div class="money fs-20 fw-5 lh-25 text-color-3">
                                                {{ __('button.currency_icon') }}{{ $car->favorite_cars->price }}</div>
                                            <div class="days-box flex justify-space align-center">
                                                <div class="img-author">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('resources') }}/assets/images/author/avt-cm1.jpg"
                                                        src="{{ asset('uploads') }}/{{ $car->user_favorites->image ? 'profiles/' . $car->user_favorites->image : 'default/profile.png' }}"
                                                        alt="image">
                                                    <span
                                                        class="font text-color-2 fw-5">{{ $car->user_favorites->name }}</span>
                                                </div>
                                                <a href="{{ route('listing.details', $car->user_favorites->id) }}"
                                                    class="view-car">View
                                                    car</a>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <div class="box-car-list hv-one">
                                        <h4 class="text-danger">No items found</h4>
                                        {{-- <div class="image-group relative ">

                                            <div class="img-style">
                                                <img class="lazyload"
                                                    data-src="{{ asset('uploads/products/') }}/assets/images/car-list/car4.jpg"
                                                    src="{{ asset('uploads/products/thumbnails') }}/" alt="image">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="text-address">
                                                <p class="text-color-3 font">brand name</p>
                                            </div>
                                            <h5 class="link-style-1">
                                                <a href="#">model name</a>
                                            </h5>
                                            <div class="icon-box flex flex-wrap">
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-km1"></i>
                                                    <span>116 kms</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-diesel"></i>
                                                    <span>disel</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <i class="icon-autodeal-automatic"></i>
                                                    <span>auto</span>
                                                </div>
                                            </div>
                                            <div class="money fs-20 fw-5 lh-25 text-color-3">
                                                {{ __('button.currency_icon') }}12000</div>
                                            <div class="days-box flex justify-space align-center">
                                                <div class="img-author">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('resources') }}/assets/images/author/avt-cm1.jpg"
                                                        src="{{ asset('uploads') }}/{{ 'default/profile.png' }}"
                                                        alt="image">
                                                    <span class="font text-color-2 fw-5">john</span>
                                                </div>
                                                <a href="#" class="view-car">View
                                                    car</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
