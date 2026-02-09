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
                        <h1 class="admin-title mb-3">{{ 'Update Your Profile' }}</h1>
                        <div class="tfcl-add-listing profile-inner">
                            <form action={{ route('profile.update.image') }} method="POST" enctype="multipart/form-data"
                                style="margin-bottom: 100px;">
                                @csrf
                                <h3>Avatar</h3>
                                <div class="tfcl_choose_avatar">
                                    <div class="avatar">
                                        <div class="form-group">
                                            <img loading="lazy" class="avatar" decoding="async" width="158"
                                                height="138" id="tfcl_avatar_thumbnail"
                                                src="{{ asset('uploads') }}/{{ $user->image ? 'profiles/' . $user->image : 'default/profile.png' }}" />
                                        </div>
                                        <div class="choose-box">
                                            <label>Upload a new Avatar</label>
                                            <div class="form-group row align-items-center flex-nowrap">
                                                <input type="file" name="image" id=""
                                                    onchange="document.getElementById('tfcl_avatar_thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                                <div class="group-button-submit d-inline">
                                                    <button type="submit"
                                                        class="submit-btn">{{ __('button.save_update') }}</button>
                                                </div>
                                            </div>
                                            <span class="notify-avatar">PNG, JPG, SVG dimension (400 * 400) max
                                                file not more then size 4 mb</span>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <form action={{ route('lang.update') }} method="POST" style="margin-bottom: 100px;">
                                @csrf

                                <div class="tfcl_choose_avatar">
                                    <div class="avatar">
                                        <div class="choose-box">
                                            <label>{{ __('text.which_lang') }}</label>
                                            <div class="form-group row align-items-center flex-nowrap">
                                                <form action="{{ route('lang.update') }}" method="POST"
                                                    class="form-group row align-items-center flex-nowrap">
                                                    @csrf
                                                    <select name="lang" id="" class="nice-select form-control">
                                                        <option {{ $user->lang == 'ja' ? 'selected' : '' }} class="option"
                                                            value="ja">Japanese</option>
                                                        <option {{ $user->lang == 'en' ? 'selected' : '' }} class="option"
                                                            value="en">English</option>
                                                        <option {{ $user->lang == 'bn' ? 'selected' : '' }} class="option"
                                                            value="bn">Bangla</option>
                                                    </select>
                                                    <div class="group-button-submit d-inline">
                                                        <button type="submit"
                                                            class="submit-btn">{{ __('button.save_update') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @if ($user->role->name == 'user')
                                <div class="tfcl_choose_avatar my-5">
                                    <div class="avatar">
                                        <div class="choose-box">
                                            <label>{{ __('Register as a seller!') }}</label>
                                            <div class="form-group row align-items-center flex-nowrap">
                                                <div class="group-button-submit d-inline">
                                                    <a href="{{ route('seller.create') }}"
                                                        class="pre-btn text-center">{{ __('Register') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action={{ route('profile.update') }} method="POST">
                                @method('POST')
                                @csrf
                                <h3 class="form-title">Information</h3>
                                <div class="form-group-2">
                                    <div class="form-group">
                                        <label for="name">Full name (Name: <strong
                                                class="text-primary">{{ $user->name }}</strong>
                                            )</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address (Email: <strong
                                                class="text-primary">{{ $user->email }}</strong>
                                            )</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your phone (Phone no: <strong
                                                class="text-primary">{{ $user->phone }}</strong>
                                            )</label>
                                        <input id="phone" type="number" class="form-control" name="phone"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location (Location: <strong
                                                class="text-primary">{{ $user->location }}</strong>
                                            )</label>
                                        <input id="location" type="text" class="form-control" name="location"
                                            placeholder="Location">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description (description: <strong
                                            class="text-primary">{{ $user->description }}</strong>
                                        )</label>
                                    <textarea name="description" id="description" placeholder="Update your description"></textarea>
                                </div>
                                <div class="group-button-submit left mb-3">
                                    <button type="submit" class="pre-btn">{{ __('button.save_update') }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
