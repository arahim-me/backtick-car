@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-3">Edit profile</h1>

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
                                                src="{{ asset('uploads') }}/{{ auth()->user()->image ? 'profiles/' . auth()->user()->image : 'default/profile.png' }}" />
                                        </div>
                                        <div class="choose-box">
                                            <label>Upload a new Avatar</label>

                                            <div class="form-group row align-items-center flex-nowrap">
                                                <input type="file" name="image" id=""
                                                    onchange="document.getElementById('update_avatar').src = window.URL.createObjectURL(this.files[0])">
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
                                                        <option {{ auth()->user()->lang == 'ja' ? 'selected' : '' }}
                                                            class="option" value="ja">Japanese</option>
                                                        <option {{ auth()->user()->lang == 'en' ? 'selected' : '' }}
                                                            class="option" value="en">English</option>
                                                        <option {{ auth()->user()->lang == 'bn' ? 'selected' : '' }}
                                                            class="option" value="bn">Bangla</option>
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
                            @if (auth()->user()->role->name == 'user')
                                <div class="tfcl_choose_avatar my-5">
                                    <div class="avatar">
                                        <div class="choose-box">
                                            <label>{{ __('Register as a seller!') }}</label>
                                            <div class="form-group row align-items-center flex-nowrap">
                                                <div class="group-button-submit d-inline">
                                                    <a href="#" class="pre-btn text-center">{{ __('Register') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action={{ route('profile.update') }} method="post">
                                @csrf

                                <h3 class="form-title">Information</h3>
                                <div class="form-group-2">
                                    <div class="form-group">
                                        <label for="name">Full name (Name: <strong
                                                class="text-primary">{{ auth()->user()->name }}</strong>
                                            )</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address (Email: <strong
                                                class="text-primary">{{ auth()->user()->email }}</strong>
                                            )</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your phone (Phone no: <strong
                                                class="text-primary">{{ auth()->user()->phone }}</strong>
                                            )</label>
                                        <input id="phone" type="number" class="form-control" name="phone"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location (Location: <strong
                                                class="text-primary">{{ auth()->user()->location }}</strong>
                                            )</label>
                                        <input id="location" type="text" class="form-control" name="location"
                                            placeholder="Location">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description (description: <strong
                                            class="text-primary">{{ auth()->user()->description }}</strong>
                                        )</label>
                                    <textarea name="description" id="description" placeholder="Description"></textarea>
                                </div>
                                {{-- <div class="form-group-4">
                                    <div class="form-group">
                                        <label for="listing_title">Your company</label>
                                        <input type="text" class="form-control" name="listing_title" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_title">Job</label>
                                        <input type="text" class="form-control" name="listing_title" value="">
                                    </div>
                                </div> --}}

                                {{-- <div id="map-single" style="position: relative; overflow: hidden;">
                                    <div
                                        style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                        <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region"
                                            aria-describedby="FC17D1F3-806D-48F4-8B82-4BF07FF7F074"
                                            style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                            <div id="FC17D1F3-806D-48F4-8B82-4BF07FF7F074" style="display: none;"><span>To
                                                    navigate the map with touch gestures double-tap and hold your finger on
                                                    the
                                                    map, then drag the map.</span></div>
                                        </div>
                                        <div class="gm-style"
                                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                            <div
                                                style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;">
                                                <div
                                                    style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                            <div
                                                                style="position: absolute; z-index: 995; transform: matrix(1, 0, 0, 1, -108, -8);">
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                                    </div>
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                    <div
                                                        style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                            <div class="map-marker-container" data-marker_id="0"
                                                                style="left: -0.0206791px; top: 0.138959px;">
                                                                <div class="marker-container">
                                                                    <div class="marker-card">
                                                                        <div class="front face">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="back face">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="marker-arrow"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                            <span id="7AD368E8-122A-40E6-B037-9FD54C85B614"
                                                                style="display: none;">To navigate, press the arrow
                                                                keys.</span>
                                                            <div class="cluster"></div>
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gm-style-moc"
                                                    style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; transition-property: opacity, display; opacity: 0; display: none;">
                                                    <p class="gm-style-mot"></p>
                                                </div>
                                            </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                                                style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe>
                                            <div
                                                style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                                        <div><img alt=""
                                                src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                                draggable="false"
                                                style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                                        </div>
                                        <div style="line-height: 20px; margin: 15px 0px;"><span
                                                style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load
                                                Google Maps correctly.</span></div>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="line-height: 16px; vertical-align: middle;"><a
                                                        href="http://g.co/dev/maps-no-account" target="_blank"
                                                        rel="noopener"
                                                        style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own
                                                        this
                                                        website?</a></td>
                                                <td style="text-align: right;"><button class="dismissButton">OK</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label for="listing_title">Socials</label>
                                    <input type="text" class="form-control" name="listing_title" value="">
                                </div> --}}

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
