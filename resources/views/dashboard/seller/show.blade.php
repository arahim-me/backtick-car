@php
    $user = auth()->user();
@endphp
@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-3">{{ $title }}</h1>
                        <div class="tfcl-add-listing profile-inner">
                            <h3 class="my-4">Seller's Profile picture</h3>
                            <div class="tfcl_choose_avatar">
                                <div class="avatar">
                                    <div class="form-group">
                                        <img loading="lazy" class="avatar" decoding="async" width="158" height="138"
                                            id="tfcl_avatar_thumbnail"
                                            src="{{ asset('uploads') }}/{{ $user->image ? 'profiles/' . $user->image : 'default/profile.png' }}" />
                                    </div>
                                </div>
                            </div>
                            <h3 class="form-title my-4">Seller's Information</h3>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Name: <strong class="text-primary">{{ $seller->user->name }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>E-mail: <strong class="text-primary">{{ $seller->user->email }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Phone: <strong class="text-primary">{{ $seller->user->phone }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Address: <strong class="text-primary">{{ $seller->user->location }}</strong></h6>
                                </div>
                            </div>
                            <h3 class="form-title my-4">Seller's NID Info</h3>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Front Side</h5>
                                    <img src="" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h5>Back Side</h5>
                                    </h5>
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tfcl-add-listing profile-inner">
                            <h3 class="my-4">Seller's Shop Logo</h3>
                            <div class="tfcl_choose_avatar">
                                <div class="avatar">
                                    <div class="form-group">
                                        <img loading="lazy" class="avatar" decoding="async" width="158" height="138"
                                            id="tfcl_avatar_thumbnail"
                                            src="{{ asset('uploads') }}/{{ $user->image ? 'profiles/' . $user->image : 'default/profile.png' }}" />
                                    </div>
                                </div>
                            </div>
                            <h3 class="form-title my-4">Seller's Shop Information</h3>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Name: <strong class="text-primary">{{ $seller->name }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>E-mail: <strong class="text-primary">{{ $seller->email }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Phone: <strong class="text-primary">{{ $seller->phone }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Fax: <strong class="text-primary">{{ $seller->fax }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Website: <strong class="text-primary">{{ $seller->website }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Social Media: <strong class="text-primary">{{ $seller->fax }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Shop Registration Number: <strong
                                            class="text-primary">{{ $seller->registration_number }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Tax Number: <strong class="text-primary">{{ $seller->tax_number }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Used car liscence Number: <strong
                                            class="text-primary">{{ $seller->used_cars_license_number }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Address: <strong class="text-primary">{{ $seller->address }}</strong></h6>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <h5>Requested At: <strong
                                            class="text-primary">{{ $seller->created_at->format('d-m-Y') }}</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Description: <strong class="text-primary">{{ $seller->description }}</strong></h6>
                                </div>
                            </div>
                            <h3 class="form-title my-4">Seller's Bank Account Info</h3>
                            <div class="row my-2">
                                <div class="col-md-4">
                                    <h6>Bank Name: <strong
                                            class="text-primary">{{ $seller->bank_account['name'] }}</strong></h6>
                                </div>
                                <div class="col-md-4">
                                    <h6>Account Number: <strong
                                            class="text-primary">{{ $seller->bank_account['account_number'] }}</strong>
                                    </h6>
                                </div>
                                <div class="col-md-4">
                                    <h6>Branch Name: <strong
                                            class="text-primary">{{ $seller->bank_account['branch'] }}</strong></h6>
                                </div>
                            </div>
                        </div>
                        <div class="group-button-submit mb-3">
                            <a href="{{ route('seller.request.updatestatus', [$seller->id, 'accept']) }}"><button type="submit" class="pre-btn">{{ __('Accept') }}</button></a>
                            <a href="{{ route('seller.request.updatestatus', [$seller->id, 'decline'])}}"><button type="submit" class="pre-btn">{{ __('Decline') }}</button></a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    @endsection
