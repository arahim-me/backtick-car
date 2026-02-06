@php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate($lang);
@endphp
@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <form class="tfcl-dashboard" action="{{ route('listing.convert', [$car->id, $lang]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h1 class="admin-title mb-3">Edit listing</h1>
                        <div class="tfcl-add-listing d-none">
                            <fieldset class="message-wrap">
                                <h3>Change Language</h3>
                                <div class="rating-input">
                                    <input type="radio" id="japanese" name="lang" value="{{ $lang }}"
                                        checked /><label for="japanese" title="japanese">{{ $lang }}</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tfcl-add-listing upload-photo">
                            <h3>Car Thumbnail</h3>
                            {{-- <div class="upload-media choose-box"
                                onclick="document.getElementById('product_thumb').click();">
                                <div class="inner">
                                    <input type="file" name="thumbnail" id="product_thumb"
                                        onchange="document.getElementById('product_thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                    <div class="desc mt-3">or drag photos here <br> <span>(Up to 10 photos)</span> </div>
                                </div>
                            </div> --}}
                            <div class="thumbnail-media">
                                <div class="item">
                                    <img src="{{ asset('uploads/products/thumbnails') }}/{{ $car->thumbnail ? $car->thumbnail : 'uploads/default/image-gallery.png' }}"
                                        id="product_thumbnail" alt="thumb">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="tfcl-add-listing upload-photo">
                            <h3>Car Photos</h3>
                            {{-- <div class="upload-media choose-box" onclick="document.getElementById('product_img').click();">
                                <div class="inner">
                                    <input type="file" name="image" multiple id="product_img"
                                        onchange="document.getElementById('product_thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                    <div class="desc mt-3">or drag photos here <br> <span>(Up to 10 photos)</span> </div>
                                </div>
                            </div> --}}
                            <div class="thumbnail-media">
                                @if ($car->image !== null)
                                    @foreach (json_decode($car->image) as $images)
                                        <div class="item">
                                            <img src="{{ asset('uploads/products/images') }}/{{ $images }}"
                                                id="product_thumbnail" alt="thumb">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item">
                                        <img src="{{ asset('uploads/default/image-gallery.png') }}" id="product_thumbnail"
                                            alt="thumb">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg></a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="tfcl-add-listing car-details">
                            <h3>Car details</h3>

                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="listing_title">Listing Title: ( <span
                                            class="text-primary text-capitalize">{{ $car->title }}</span> )</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $tr->translate($car->title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="brandName">Brand Name: ( <span
                                            class="text-primary text-capitalize">{{ $car->brand_name }}</span> )</label>
                                    <input type="text" class="form-control" name="brand_name"
                                        value="{{ $tr->translate($car->brand_name) }}" id="brandName">
                                    {{-- <div class="nice-select form-control" tabindex="0">
                                    <span class="current">Select</span>
                                    <ul class="list">
                                        <li class="option">Sample Data</li>
                                        <li class="option">Sample Data</li>
                                    </ul>
                                </div> --}}
                                </div>
                            </div>
                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="model">Model: ( <span
                                            class="text-primary text-capitalize">{{ $car->model }}</span> )</label>
                                    <input type="text" class="form-control" name="model"
                                        value="{{ $tr->translate($car->model) }}" id="model">
                                    {{-- <div class="nice-select form-control" tabindex="0">
                                    <span class="current">Select</span>
                                    <ul class="list">
                                        <li class="option">Sample Data</li>
                                        <li class="option">Sample Data</li>
                                    </ul>
                                </div> --}}
                                </div>

                                {{-- <div class="form-group">
                                    <label for="category">Select Category *</label>
                                    <select class="nice-select form-control" tabindex="0" name="category_id">
                                        @foreach ($categories as $category)
                                            <option class="optoin" value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label for="years">Years: ( <span
                                            class="text-primary text-capitalize">{{ $car->year }}</span> )</label>
                                    <select class="nice-select form-control" tabindex="0" name="year">
                                        @for ($i = date('Y'); $i >= 1990; $i--)
                                            <option value="{{ $car->year }}" {{ $i == $car->year ? 'selected' : '' }}>
                                                {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="contdition">Condition: ( <span
                                            class="text-primary text-capitalize">{{ $car->condition }}</span> )</label>
                                    <input type="text" class="form-control"
                                        value="{{ $tr->translate($car->condition) }}">
                                </div>
                            </div>

                            {{-- <div class="form-group-4">
                                <div class="form-group">
                                    <label for="stock-number">Stock Number: ( <span
                                            class="text-primary text-capitalize">{{ $car->stock_number }}</span> )</label>
                                    <input type="text" class="form-control" name="stock_number"
                                        value="{{ $car->title }}" id="sock-number">
                                </div>
                                <div class="form-group">
                                    <label for="mileage">Mileage: ( <span
                                            class="text-primary text-capitalize">{{ $car->mileage }}</span> )</label>
                                    <input type="number" class="form-control" name="mileage"
                                        value="{{ $car->mileage }}" id="mileage">
                                </div>
                                <div class="form-group">
                                    <label for="transmision">Transmission: ( <span
                                            class="text-primary text-capitalize">{{ $car->transmision }}</span> )</label>
                                    <input type="number" class="form-control" name="transmision" id="transmision"
                                        value="{{ $car->transmision }}">

                                </div>
                            </div> --}}

                            <div class="form-group-4">
                                {{-- <div class="form-group">
                                    <label for="driver_type">Driver Type: ( <span
                                            class="text-primary text-capitalize">{{ $car->driver_type }}</span> )</label>
                                    <select class="nice-select form-control" tabindex="0" name="driver_type">
                                        <option class="optoin" value="Auto"
                                            {{ $car->driver_type == 'Auto' ? 'selected' : '' }}>Auto</option>
                                        <option class="option" value="Manual"
                                            {{ $car->driver_type == 'Manual' ? 'selected' : '' }}>Manual</option>
                                        <option class="option" value="Semi-Auto"
                                            {{ $car->driver_type == 'Semi-Auto' ? 'selected' : '' }}>Semi Auto</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="engine_size">Engine Size: ( <span
                                            class="text-primary text-capitalize">{{ $car->engine_size }}</span> )</label>
                                    <input type="text" class="form-control" name="engine_size"
                                        value="{{ $car->engine_size }}" id="engine_size">
                                </div>
                                <div class="form-group">
                                    <label for="Cylinders">Cylinders: ( <span
                                            class="text-primary text-capitalize">{{ $car->cylinders }}</span> )</label>
                                    <input type="text" class="form-control" name="cylinders"
                                        value="{{ $car->cylinders }}" id="Cylinders">

                                </div> --}}
                                <div class="form-group">
                                    <label for="fuel_type">Fuel Type: ( <span
                                            class="text-primary text-capitalize">{{ $car->fuel_type }}</span> )</label>
                                    <input type="text" class="form-control" name="fuel_type"
                                        value="{{ $tr->translate($car->fuel_type) }}"id="fuel_type">
                                </div>
                            </div>

                            <div class="form-group-4">
                                {{-- <div class="form-group">
                                    <label for="doors">Doors: ( <span
                                            class="text-primary text-capitalize">{{ $car->doors }}</span> )</label>
                                    <select class="nice-select form-control" tabindex="0" name="doors">
                                        <option class="optoin" value="3" {{ $car->doors == '3' ? 'selected' : '' }}>
                                            3
                                        </option>
                                        <option class="option" value="4" {{ $car->doors == '4' ? 'selected' : '' }}>
                                            4
                                        </option>
                                        <option class="option" value="5" {{ $car->doors == '5' ? 'selected' : '' }}>
                                            5
                                        </option>
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="color">Color: ( <span
                                            class="text-primary text-capitalize">{{ $car->color }}</span> )</label>
                                    <input type="text" class="form-control" name="color"
                                        value="{{ $car->color }}" id="color">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="seats">Seats: ( <span
                                            class="text-primary text-capitalize">{{ $car->seats }}</span> )</label>
                                    <select class="nice-select form-control" tabindex="0" name="seats">
                                        @for ($i = 2; $i <= 8; $i++)
                                            <option value="{{ $i }}"
                                                {{ $car->seats == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tyer_type">Tyer Type: ( <span
                                            class="text-primary text-capitalize">{{ $car->tyer_type }}</span> )</label>
                                    <select name="tyer_type" id="tyer_type" class="nice-select form-control"
                                        tabindex="1">
                                        <option class="option" value="Summer"
                                            {{ $car->tyer_type == 'Summer' ? 'selected' : '' }}>Summer</option>
                                        <option class="option" value="Winter"
                                            {{ $car->tyer_type == 'Winter' ? 'selected' : '' }}>Winter</option>
                                    </select>
                                </div> --}}
                            </div>
                            {{-- <div class="form-group-4">
                                <div class="form-group">
                                    <label for="weight">Weight {{ '(KG)' }}: <span
                                            class="text-primary text-capitalize">{{ $car->weight }}</span></label>
                                    <input type="number" class="form-control" name="weight" placeholder="Weight"
                                        id="weight">
                                </div>
                                <div class="form-group">
                                    <label for="dimension">Dimension {{ '(Fit)' }}: <span
                                            class="text-primary text-capitalize">{{ $car->dimension }}</span> </label>
                                    <input type="number" class="form-control" name="dimension" placeholder="Dimension"
                                        id="dimension">
                                </div>
                            </div> --}}

                            <div class="form-group mb-0">
                                <label for="description">Description: ( <span
                                        class="text-primary text-capitalize">{{ $car->description }}</span> )</label>
                                <textarea name="description" id="description" placeholder="Car Description">{{ $tr->translate($car->description) }}</textarea>
                            </div>

                        </div>

                        {{-- <div class="tfcl-add-listing car-features">
                            <h3>Safety features</h3>

                            @if ($car->features != null)
                                <div class="group-features-5">
                                    <div class="group-features">
                                        <h6>Request Price Label</h6>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="A/C: Front"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'A/C: Front' ? 'checked' : '' }} @endforeach>
                                            <label>A/C: Front</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Backup Camera"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Backup Camera' ? 'checked' : '' }} @endforeach>
                                            <label>Backup Camera</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Cruise Control"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Cruise Control' ? 'checked' : '' }} @endforeach>
                                            <label>Cruise Control</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Navigation"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Navigation' ? 'checked' : '' }} @endforeach>
                                            <label>Navigation</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Power Locks"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Power Locks' ? 'checked' : '' }} @endforeach>
                                            <label>Power Locks</label>
                                        </div>
                                    </div>

                                    <div class="group-features">
                                        <h6>Entertainment</h6>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Audio system"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Audio system' ? 'checked' : '' }} @endforeach>
                                            <label>Audio system</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Touchscreen display"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Touchscreen display' ? 'checked' : '' }} @endforeach>
                                            <label>Touchscreen display</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="GPS navigation"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'GPS navigation' ? 'checked' : '' }} @endforeach>
                                            <label>GPS navigation</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Phone connectivity"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Phone connectivity' ? 'checked' : '' }} @endforeach>
                                            <label>Phone connectivity</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="In-car Wi-Fi"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'In-car Wi-Fi' ? 'checked' : '' }} @endforeach>
                                            <label>In-car Wi-Fi</label>
                                        </div>
                                    </div>

                                    <div class="group-features">
                                        <h6>Safety</h6>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Anti-lock brake system (ABS)"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Anti-lock brake system (ABS)' ? 'checked' : '' }} @endforeach>
                                            <label>Anti-lock brake system (ABS)</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Electronic stability control (ESC)"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Electronic stability control (ESC)' ? 'checked' : '' }} @endforeach>
                                            <label>Electronic stability control (ESC)</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Brake assist (BA)"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Brake assist (BA)' ? 'checked' : '' }} @endforeach>
                                            <label>Brake assist (BA)</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Airbags"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Airbags' ? 'checked' : '' }} @endforeach>
                                            <label>Airbags</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Blind spot monitoring system (BSM)"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Blind spot monitoring system (BSM)' ? 'checked' : '' }} @endforeach>
                                            <label>Blind spot monitoring system (BSM)</label>
                                        </div>
                                    </div>

                                    <div class="group-features">
                                        <h6>Interior</h6>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Premium leather seats"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Premium leather seats' ? 'checked' : '' }} @endforeach>
                                            <label>Premium leather seats</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Wood trim"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Wood trim' ? 'checked' : '' }} @endforeach>
                                            <label>Wood trim</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Mini bar"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Mini bar' ? 'checked' : '' }} @endforeach>
                                            <label>Mini bar</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Rear seat ventilation system"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Rear seat ventilation system' ? 'checked' : '' }} @endforeach>
                                            <label>Rear seat ventilation system</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Large infotainment screen"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Large infotainment screen' ? 'checked' : '' }} @endforeach>
                                            <label>Large infotainment screen</label>
                                        </div>
                                    </div>

                                    <div class="group-features">
                                        <h6>Exterior</h6>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Chrome-plated grill"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Chrome-plated grill' ? 'checked' : '' }} @endforeach>
                                            <label>Chrome-plated grill</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Smart headlight cluster"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Smart headlight cluster' ? 'checked' : '' }} @endforeach>
                                            <label>Smart headlight cluster</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Premium wheels"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Premium wheels' ? 'checked' : '' }} @endforeach>
                                            <label>Premium wheels</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="Body character lines"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'Body character lines' ? 'checked' : '' }} @endforeach>
                                            <label>Body character lines</label>
                                        </div>
                                        <div class="parent-item group-checkbox">
                                            <input class="form-check-input" type="checkbox" name="features[]"
                                                value="High-quality paint"
                                                @foreach (json_decode($car->features) as $feature)
                                            {{ $feature == 'High-quality paint' ? 'checked' : '' }} @endforeach>
                                            <label>High-quality paint</label>
                                        </div>
                                    </div>

                                </div>
                            @else
                                <h4 class="text-danger">No features data found.</h4>
                            @endif

                        </div> --}}

                        <div class="tfcl-add-listing car-price">
                            <h3>Car price</h3>
                            <div class="form-group mb-0">
                                <label for="price">Full price: ( <span
                                        class="text-primary text-capitalize">{{ __('button.currency_icon') }}{{ $car->price }}</span>
                                    )</label>
                                <input type="number" class="form-control" name="price"
                                    value="{{ $tr->translate($car->price) }}" id="price">
                            </div>
                        </div>

                        {{-- <div class="tfcl-add-listing car-location">
                            <h3>Location</h3>

                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="location">Full Address: ( <span
                                            class="text-primary text-capitalize">{{ $car->location }}</span> )</label>
                                    <input type="text" class="form-control" name="location"
                                        value="{{ $car->location }}" id="location">
                                </div>
                                <div class="form-group">
                                <label for="listing_title">Map location</label>
                                <input type="text" class="form-control" name="listing_title" value="2464 Royal Ln. Mesa, New Jersey 45463">
                            </div>
                            </div>

                            <div id="map-single" class="map-single" data-map-zoom="16" data-map-scroll="true"
                                style="position: relative; overflow: hidden;">
                                <div
                                    style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div><button draggable="false" aria-label="Keyboard shortcuts"
                                            title="Keyboard shortcuts" type="button"
                                            style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button>
                                    </div>
                                    <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region"
                                        aria-describedby="AEB2DAAA-BC57-47D2-812A-AAED2773289E"
                                        style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                        <div id="AEB2DAAA-BC57-47D2-812A-AAED2773289E" style="display: none;">
                                            <div class="LGLeeN-keyboard-shortcuts-view">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><kbd aria-label="Left arrow">←</kbd></td>
                                                            <td aria-label="Move left.">Move left</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd aria-label="Right arrow">→</kbd></td>
                                                            <td aria-label="Move right.">Move right</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd aria-label="Up arrow">↑</kbd></td>
                                                            <td aria-label="Move up.">Move up</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd aria-label="Down arrow">↓</kbd></td>
                                                            <td aria-label="Move down.">Move down</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>+</kbd></td>
                                                            <td aria-label="Zoom in.">Zoom in</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>-</kbd></td>
                                                            <td aria-label="Zoom out.">Zoom out</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>Home</kbd></td>
                                                            <td aria-label="Jump left by 75%.">Jump left by 75%</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>End</kbd></td>
                                                            <td aria-label="Jump right by 75%.">Jump right by 75%</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>Page Up</kbd></td>
                                                            <td aria-label="Jump up by 75%.">Jump up by 75%</td>
                                                        </tr>
                                                        <tr>
                                                            <td><kbd>Page Down</kbd></td>
                                                            <td aria-label="Jump down by 75%.">Jump down by 75%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-style"
                                        style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                        <div
                                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                            <div
                                                style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                <div
                                                    style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div
                                                            style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -38, -31);">
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
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
                                                    <div
                                                        style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -38, -31);">
                                                        <div
                                                            style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24641!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=56711"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24641!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=75709"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24641!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=64147"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24640!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=41468"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24642!4i256!2m3!1e0!2sm!3i715472851!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=130085"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24640!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=53030"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19298!3i24641!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=87271"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19293!3i24640!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=29906"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19298!3i24640!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=83590"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19293!3i24642!4i256!2m3!1e0!2sm!3i715472851!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=95399"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24642!4i256!2m3!1e0!2sm!3i715472851!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=10576"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24640!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=72028"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19298!3i24642!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=95078"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24642!4i256!2m3!1e0!2sm!3i715472851!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=106961"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19293!3i24641!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=33587"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24642!4i256!2m3!1e0!2sm!3i715472851!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=118523"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24641!4i256!2m3!1e0!2sm!3i715472911!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=45149"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;">
                                                            <img draggable="false" alt="" role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24640!4i256!2m3!1e0!2sm!3i715472922!2m3!1e2!6m1!3e5!3m18!2sen-US!3sUS!5e18!12m5!1e68!2m2!1sset!2sRoadmap!4e2!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA&amp;token=60466"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                <div
                                                    style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                    <div
                                                        style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                        <div class="map-marker-container" data-marker_id="0"
                                                            style="left: -80.3508px; top: -2.41105px;">
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
                                                        <span id="AB92604C-51EE-4CF0-BCE7-D10BA84BAB0F"
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
                                        <div>
                                            <div class="gmnoprint gm-bundled-control" draggable="false"
                                                data-control-width="40" data-control-height="81"
                                                style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;">
                                                <div class="gmnoprint" data-control-width="40" data-control-height="81"
                                                    style="position: absolute; left: 0px; top: 0px;">
                                                    <div draggable="false"
                                                        style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                        <button draggable="false" aria-label="Zoom in" title="Zoom in"
                                                            type="button" class="gm-control-active"
                                                            style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"></button>
                                                        <div
                                                            style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                                        </div><button draggable="false" aria-label="Zoom out"
                                                            title="Zoom out" type="button" class="gm-control-active"
                                                            style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt="" style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div><button draggable="false" aria-label="Toggle fullscreen view"
                                                title="Toggle fullscreen view" type="button" aria-pressed="false"
                                                class="gm-control-active gm-fullscreen-control"
                                                style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt="" style="height: 18px; width: 18px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt="" style="height: 18px; width: 18px;"><img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt="" style="height: 18px; width: 18px;"></button></div>
                                        <div></div>
                                        <div></div>
                                        <div>
                                            <div class="zoomControlWrapper"
                                                style="padding: 5px; position: absolute; right: 0px; top: 255px;">
                                                <div>
                                                    <div class="custom-zoom-in"></div>
                                                    <div class="custom-zoom-out"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div>
                                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                draggable="false" data-control-width="0" data-control-height="0"
                                                style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;">
                                                <div class="gmnoprint" data-control-width="40" data-control-height="40"
                                                    style="display: none; position: absolute;">
                                                    <div
                                                        style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                                        <button draggable="false" aria-label="Rotate map clockwise"
                                                            title="Rotate map clockwise" type="button"
                                                            class="gm-control-active"
                                                            style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img
                                                                alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"></button>
                                                        <div
                                                            style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                                        </div><button draggable="false"
                                                            aria-label="Rotate map counterclockwise"
                                                            title="Rotate map counterclockwise" type="button"
                                                            class="gm-control-active"
                                                            style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img
                                                                alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"></button>
                                                        <div
                                                            style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;">
                                                        </div><button draggable="false" aria-label="Tilt map"
                                                            title="Tilt map" type="button"
                                                            class="gm-tilt gm-control-active"
                                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img
                                                                alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"><img alt=""
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                <a target="_blank" rel="noopener"
                                                    title="Open this area in Google Maps (opens a new window)"
                                                    aria-label="Open this area in Google Maps (opens a new window)"
                                                    href="https://maps.google.com/maps?ll=40.709295,-74.003099&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                                    style="display: inline;">
                                                    <div style="width: 66px; height: 26px;"><img alt="Google"
                                                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.3%22%20fill%3D%22%23000%22%20stroke%3D%22%23000%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39009%2024.8656%209.39009%2021.7783%209.39009%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2961%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39009%2035.7387%209.39009%2032.6513%209.39009%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22081v-.75H52.0788V20.4412H55.7387V5.22081z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868zM29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594zM40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594zM51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084zM54.9887%205.22081V19.6912H52.8288V5.22081H54.9887zM63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23fff%22/%3E%3C/svg%3E"
                                                            draggable="false"
                                                            style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div></div>
                                        <div>
                                            <div
                                                style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                                                <div class="gmnoprint" style="z-index: 1000001;">
                                                    <div draggable="false" class="gm-style-cc"
                                                        style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                        <div
                                                            style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div
                                                                style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                            <button draggable="false" aria-label="Keyboard shortcuts"
                                                                title="Keyboard shortcuts" type="button"
                                                                style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard
                                                                shortcuts</button></div>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint" style="z-index: 1000001;">
                                                    <div draggable="false" class="gm-style-cc"
                                                        style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                        <div
                                                            style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div
                                                                style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                            <button draggable="false" aria-label="Map Data"
                                                                title="Map Data" type="button"
                                                                style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Map
                                                                Data</button><span style="">Map data ©2025
                                                                Google</span></div>
                                                    </div>
                                                </div>
                                                <div class="gmnoscreen">
                                                    <div
                                                        style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                        Map data ©2025 Google</div>
                                                </div><button draggable="false"
                                                    aria-label="Map Scale: 100 m per 55 pixels"
                                                    title="Map Scale: 100 m per 55 pixels" type="button"
                                                    class="gm-style-cc"
                                                    aria-describedby="2E69F33B-9E98-43F6-8845-504C3051B364"
                                                    style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                                                    <div
                                                        style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div
                                                            style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <span style="color: rgb(0, 0, 0);">100 m&nbsp;</span>
                                                        <div
                                                            style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 59px;">
                                                            <div
                                                                style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;">
                                                            </div>
                                                            <div style="width: 4px; height: 8px; left: 0px; top: 0px;">
                                                            </div>
                                                            <div
                                                                style="width: 4px; height: 8px; position: absolute; right: 0px; bottom: 0px;">
                                                            </div>
                                                            <div
                                                                style="position: absolute; background-color: rgb(0, 0, 0); height: 2px; left: 1px; bottom: 1px; right: 1px;">
                                                            </div>
                                                            <div
                                                                style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(0, 0, 0);">
                                                            </div>
                                                            <div
                                                                style="width: 2px; height: 6px; position: absolute; background-color: rgb(0, 0, 0); bottom: 1px; right: 1px;">
                                                            </div>
                                                        </div>
                                                    </div><span id="2E69F33B-9E98-43F6-8845-504C3051B364"
                                                        style="display: none;">Click to toggle between metric and imperial
                                                        units</span>
                                                </button>
                                                <div class="gmnoprint gm-style-cc" draggable="false"
                                                    style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                    <div
                                                        style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div
                                                            style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                                                            target="_blank" rel="noopener"
                                                            style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms</a>
                                                    </div>
                                                </div>
                                                <div draggable="false" class="gm-style-cc"
                                                    style="user-select: none; position: relative; height: 14px; line-height: 14px; display: none;">
                                                    <div
                                                        style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div
                                                            style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a target="_blank" rel="noopener"
                                                            title="Report errors in the road map or imagery to Google"
                                                            dir="ltr"
                                                            href="https://www.google.com/maps/@40.709295,-74.003099,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                            style="font-family: Roboto, Arial, sans-serif; font-size: 10px; text-decoration: none; position: relative; color: rgb(0, 0, 0);">Report
                                                            a map error</a></div>
                                                </div>
                                            </div>
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
                                                    href="http://g.co/dev/maps-no-account" target="_blank" rel="noopener"
                                                    style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this
                                                    website?</a></td>
                                            <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div> --}}

                        {{-- <div class="tfcl-add-listing car-video">
                            <h3>Video</h3>
                            <p>Listing with video gets 6 times higher exposure to buyers. Put your video link here!</p>
                            <div class="form-group mb-0">
                                <label for="video">Video URL: ( <span
                                        class="text-primary text-capitalize">{{ $car->video }}</span> )</label>
                                <input type="text" class="form-control" name="video" value="{{ $car->title }}"
                                    id="video">
                            </div>
                        </div> --}}

                        {{-- <div class="tfcl-add-listing car-attr">
                        <h3>Attachments</h3>

                        <ul class="list-attrach">
                            <li class="item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                    <path d="M53.625 4.40731V55.5926C53.625 56.2947 53.3461 56.9679 52.8497 57.4644C52.3533 57.9608 51.68 58.2397 50.9779 58.2397H9.02206C8.32002 58.2397 7.64673 57.9608 7.15031 57.4644C6.65389 56.9679 6.375 56.2947 6.375 55.5926V12.3838H14.3603C15.0623 12.3838 15.7356 12.1049 16.232 11.6085C16.7285 11.1121 17.0074 10.4388 17.0074 9.73672V1.76025H50.9779C51.68 1.76025 52.3533 2.03914 52.8497 2.53556C53.3461 3.03198 53.625 3.70527 53.625 4.40731Z" fill="#E9EDF4"></path>
                                    <path d="M6.375 12.3838H14.3603C15.0623 12.3838 15.7356 12.1049 16.232 11.6085C16.7285 11.1121 17.0074 10.4388 17.0074 9.73672V1.76025L6.375 12.3838Z" fill="#D2DBEA"></path>
                                    <path d="M56.4706 34.5776V46.86C56.4706 47.562 56.1917 48.2353 55.6953 48.7317C55.1989 49.2281 54.5256 49.507 53.8235 49.507H6.17648C5.47443 49.507 4.80114 49.2281 4.30472 48.7317C3.8083 48.2353 3.52942 47.562 3.52942 46.86V34.5776C3.52942 33.8756 3.8083 33.2023 4.30472 32.7058C4.80114 32.2094 5.47443 31.9305 6.17648 31.9305H53.8235C54.5256 31.9305 55.1989 32.2094 55.6953 32.7058C56.1917 33.2023 56.4706 33.8756 56.4706 34.5776Z" fill="#FF7101"></path>
                                    <path d="M46.3526 19.8503C46.3526 20.4838 45.8479 20.9885 45.2144 20.9885H14.7856C14.4837 20.9885 14.1942 20.8686 13.9807 20.6551C13.7673 20.4417 13.6473 20.1521 13.6473 19.8503C13.6473 19.5484 13.7673 19.2589 13.9807 19.0454C14.1942 18.832 14.4837 18.712 14.7856 18.712H45.2144C45.8479 18.712 46.3526 19.2167 46.3526 19.8503ZM46.3526 25.6826C46.3526 26.3162 45.8479 26.8209 45.2144 26.8209H14.7856C14.4837 26.8209 14.1942 26.7009 13.9807 26.4875C13.7673 26.274 13.6473 25.9845 13.6473 25.6826C13.6473 25.3807 13.7673 25.0912 13.9807 24.8778C14.1942 24.6643 14.4837 24.5444 14.7856 24.5444H45.2144C45.8479 24.5444 46.3526 25.05 46.3526 25.6826Z" fill="#D2DBEA"></path>
                                    <path d="M18.7748 44.9179C18.7223 44.8663 18.6809 44.8044 18.6533 44.7361C18.6257 44.6678 18.6123 44.5945 18.6142 44.5209V36.9335C18.6142 36.7773 18.6671 36.6423 18.7748 36.5312C18.8254 36.4769 18.887 36.4338 18.9554 36.405C19.0238 36.3761 19.0976 36.3619 19.1718 36.3635H21.998C22.7833 36.3635 23.4239 36.4959 23.9189 36.7606C24.4157 37.0253 24.7704 37.3641 24.9865 37.777C25.2001 38.19 25.3086 38.6365 25.3086 39.1156C25.3086 39.5947 25.2001 40.042 24.9857 40.455C24.7704 40.8679 24.4157 41.2068 23.9189 41.4715C23.4239 41.7362 22.7824 41.8685 21.998 41.8685H19.7418V44.5209C19.7433 44.5951 19.7291 44.6688 19.7002 44.7372C19.6714 44.8056 19.6284 44.8672 19.5742 44.9179C19.463 45.0247 19.328 45.0785 19.1709 45.0785C19.0139 45.0785 18.8815 45.0256 18.7748 44.9179ZM21.8868 40.8018C22.7295 40.8018 23.3224 40.6403 23.6648 40.3182C24.008 39.9962 24.1792 39.5947 24.1792 39.1156C24.1792 38.6365 24.008 38.235 23.6648 37.9129C23.3224 37.5909 22.7295 37.4294 21.8868 37.4294H19.7418V40.8018H21.8868Z" fill="white"></path>
                                    <path d="M19.1709 45.2999C19.0685 45.3011 18.9669 45.2816 18.8721 45.2426C18.7774 45.2037 18.6915 45.146 18.6195 45.0732C18.5461 45.0014 18.4883 44.9153 18.4494 44.8203C18.4106 44.7253 18.3916 44.6234 18.3936 44.5208V36.9335C18.3936 36.7182 18.4686 36.5311 18.6168 36.3776C18.688 36.3024 18.774 36.2427 18.8693 36.2023C18.9647 36.1619 19.0674 36.1417 19.1709 36.1429H21.998C22.8159 36.1429 23.4971 36.2849 24.023 36.5655C24.5559 36.8496 24.945 37.2229 25.1815 37.6746C25.4109 38.1185 25.5292 38.6029 25.5292 39.1155C25.5292 39.6282 25.4118 40.1126 25.1815 40.5564C24.9459 41.0082 24.5559 41.3814 24.023 41.6664C23.498 41.9461 22.8168 42.0882 21.998 42.0882H19.9624V44.5208C19.9636 44.6246 19.9434 44.7276 19.903 44.8232C19.8627 44.9189 19.803 45.0052 19.7277 45.0767C19.6542 45.1485 19.5673 45.2051 19.4719 45.2433C19.3765 45.2814 19.2745 45.3004 19.1718 45.299L19.1709 45.2999ZM19.1709 36.584C19.1267 36.5826 19.0826 36.5908 19.0418 36.608C19.001 36.6252 18.9643 36.6511 18.9345 36.6838C18.9018 36.7164 18.8761 36.7554 18.8589 36.7984C18.8418 36.8413 18.8336 36.8873 18.8348 36.9335V44.5208C18.8348 44.6196 18.8648 44.6964 18.9309 44.7608C19.0633 44.8932 19.2812 44.894 19.4224 44.7582C19.455 44.7279 19.4807 44.6909 19.4977 44.6498C19.5148 44.6087 19.5228 44.5644 19.5212 44.5199V41.647H21.998C22.7436 41.647 23.355 41.5226 23.8156 41.2764C24.2692 41.0346 24.5965 40.724 24.7906 40.3526C24.9874 39.9732 25.088 39.5567 25.088 39.1155C25.088 38.6743 24.9874 38.2588 24.7906 37.8785C24.5965 37.5079 24.2683 37.1964 23.8156 36.9546C23.3542 36.7085 22.7427 36.584 21.998 36.584H19.1709ZM21.8868 41.0223H19.5212V37.2088H21.8859C22.7948 37.2088 23.4274 37.3861 23.8156 37.7523C24.2039 38.1167 24.3998 38.5755 24.3998 39.1155C24.3998 39.6555 24.2039 40.1143 23.8156 40.4788C23.4274 40.8449 22.7956 41.0223 21.8868 41.0223ZM19.9624 40.5811H21.8859C22.6668 40.5811 23.2148 40.4382 23.5139 40.1576C23.8139 39.8752 23.9586 39.5355 23.9586 39.1155C23.9586 38.6955 23.813 38.3549 23.5139 38.0743C23.2148 37.792 22.6668 37.6508 21.8868 37.6508H19.9624V40.5811ZM27.1059 44.8552C27.0533 44.8036 27.0117 44.7418 26.984 44.6735C26.9562 44.6052 26.9427 44.5319 26.9445 44.4582V36.9335C26.9445 36.7773 26.9974 36.6423 27.1059 36.5311C27.1565 36.4769 27.2179 36.434 27.2862 36.4051C27.3544 36.3762 27.428 36.362 27.5021 36.3635H29.9939C30.9353 36.3635 31.7356 36.5726 32.393 36.9899C33.0266 37.382 33.5394 37.9417 33.8745 38.6073C34.2045 39.269 34.3695 39.9626 34.3695 40.6896C34.3695 41.4167 34.2045 42.1111 33.8745 42.7729C33.5392 43.4385 33.0261 43.9983 32.3921 44.3902C31.7356 44.8085 30.9362 45.0167 29.9939 45.0167H27.503C27.4293 45.0184 27.356 45.005 27.2877 44.9772C27.2194 44.9494 27.1575 44.9079 27.1059 44.8552ZM29.858 43.9632C30.5348 43.9632 31.1295 43.8246 31.6421 43.5476C32.1408 43.2846 32.5538 42.8844 32.8324 42.3943C33.113 41.9029 33.2542 41.3355 33.2542 40.6905C33.2542 40.0455 33.113 39.4773 32.8324 38.9858C32.5535 38.4959 32.1406 38.0958 31.6421 37.8326C31.1303 37.5555 30.5348 37.4179 29.858 37.4179H28.0721V43.9632H29.858Z" fill="white"></path>
                                    <path d="M29.9939 45.2373H27.503C27.4005 45.2387 27.2987 45.2194 27.2038 45.1806C27.1089 45.1418 27.0228 45.0842 26.9506 45.0114C26.8773 44.9396 26.8195 44.8536 26.7806 44.7586C26.7418 44.6636 26.7228 44.5617 26.7248 44.4591V36.9335C26.7248 36.7182 26.7998 36.5311 26.948 36.3776C27.0193 36.3023 27.1054 36.2425 27.2009 36.2021C27.2964 36.1617 27.3993 36.1416 27.503 36.1429H29.9948C30.975 36.1429 31.8212 36.3652 32.5121 36.8038C33.1789 37.2178 33.7187 37.8076 34.0721 38.5085C34.4129 39.1852 34.5904 39.9324 34.5904 40.6901C34.5904 41.4478 34.4129 42.195 34.0721 42.8717C33.7187 43.5726 33.1789 44.1624 32.5121 44.5764C31.8212 45.0149 30.9742 45.2373 29.9939 45.2373ZM27.5021 36.5841C27.4577 36.5825 27.4135 36.5906 27.3725 36.6078C27.3315 36.6251 27.2947 36.651 27.2648 36.6838C27.2321 36.7164 27.2064 36.7554 27.1892 36.7984C27.1721 36.8413 27.1639 36.8873 27.165 36.9335V44.4591C27.165 44.557 27.195 44.6338 27.2621 44.6991C27.2932 44.7309 27.3306 44.7568 27.3719 44.7734C27.4133 44.79 27.4576 44.7977 27.5021 44.7961H29.9939C30.8895 44.7961 31.6562 44.5967 32.2748 44.2049C32.874 43.8333 33.3591 43.3036 33.6768 42.6741C33.9874 42.0588 34.1491 41.3793 34.1491 40.6901C34.1491 40.0009 33.9874 39.3214 33.6768 38.7061C33.359 38.0769 32.8738 37.5476 32.2748 37.1761C31.6562 36.7835 30.8895 36.5849 29.9939 36.5849H27.503L27.5021 36.5841ZM29.858 44.1838H27.8515V37.1964H29.858C30.5674 37.1964 31.2036 37.3455 31.7471 37.6376C32.2942 37.9341 32.7239 38.3505 33.0239 38.8755C33.3239 39.4005 33.4748 40.0111 33.4748 40.6905C33.4748 41.3699 33.3239 41.9805 33.0239 42.5038C32.7244 43.0292 32.2816 43.4586 31.7471 43.7417C31.2045 44.0346 30.5683 44.1838 29.858 44.1838ZM28.2927 43.7426H29.858C30.4942 43.7426 31.0598 43.6111 31.5371 43.3544C32.01 43.0985 32.3815 42.7385 32.6409 42.2849C32.9012 41.8288 33.0336 41.2923 33.0336 40.6905C33.0336 40.0888 32.9012 39.5523 32.6409 39.0952C32.3816 38.642 31.9992 38.2715 31.538 38.0267C31.0589 37.7691 30.4942 37.6385 29.858 37.6385H28.2927V43.7426ZM36.4156 44.9179C36.3631 44.8662 36.3218 44.8043 36.2941 44.736C36.2665 44.6677 36.2532 44.5945 36.255 44.5208V36.9335C36.255 36.7773 36.308 36.6423 36.4156 36.5311C36.4663 36.4768 36.5278 36.4338 36.5963 36.4049C36.6647 36.376 36.7384 36.3619 36.8127 36.3635H41.6348C41.783 36.3635 41.9092 36.4155 42.0124 36.5188C42.1156 36.622 42.1677 36.7482 42.1677 36.8964C42.1677 37.0446 42.1156 37.1699 42.0124 37.2688C41.9092 37.3676 41.783 37.417 41.6348 37.417H37.3827V40.1567H41.2006C41.3506 40.1567 41.4759 40.2096 41.5792 40.312C41.6824 40.4152 41.7345 40.5414 41.7345 40.6905C41.7345 40.8388 41.6824 40.9632 41.5792 41.062C41.4759 41.1608 41.3497 41.2102 41.2006 41.2102H37.3827V44.5208C37.3842 44.5951 37.37 44.6688 37.3411 44.7372C37.3122 44.8056 37.2693 44.8672 37.215 44.9179C37.1039 45.0246 36.9689 45.0785 36.8127 45.0785C36.6565 45.0785 36.5233 45.0255 36.4156 44.9179Z" fill="white"></path>
                                    <path d="M36.8118 45.3C36.7094 45.3011 36.6077 45.2816 36.513 45.2427C36.4183 45.2037 36.3323 45.1461 36.2603 45.0732C36.187 45.0014 36.1291 44.9154 36.0903 44.8204C36.0515 44.7254 36.0324 44.6235 36.0344 44.5209V36.9335C36.0344 36.7182 36.1094 36.5311 36.2577 36.3776C36.329 36.3023 36.4151 36.2425 36.5106 36.2022C36.6061 36.1618 36.709 36.1416 36.8127 36.1429H41.6347C41.7339 36.1413 41.8323 36.1599 41.9241 36.1975C42.0159 36.2352 42.099 36.291 42.1686 36.3617C42.2391 36.4316 42.295 36.5149 42.3327 36.6068C42.3704 36.6986 42.3893 36.7971 42.3883 36.8964C42.388 36.9948 42.3683 37.092 42.3302 37.1827C42.2921 37.2733 42.2364 37.3555 42.1663 37.4244C42.0962 37.4934 42.0131 37.5477 41.9219 37.5843C41.8306 37.6209 41.733 37.639 41.6347 37.6376H37.6033V39.9361H41.2006C41.3 39.9346 41.3986 39.9532 41.4906 39.991C41.5825 40.0288 41.6658 40.0849 41.7353 40.1559C41.8063 40.2254 41.8624 40.3087 41.9002 40.4006C41.9379 40.4925 41.9566 40.5912 41.955 40.6906C41.9564 40.7897 41.9373 40.8881 41.8989 40.9795C41.8605 41.0709 41.8036 41.1533 41.7318 41.2217C41.6614 41.2899 41.5783 41.3435 41.4871 41.3794C41.3959 41.4152 41.2986 41.4327 41.2006 41.4309H37.6033V44.5209C37.6046 44.6246 37.5845 44.7275 37.5443 44.8232C37.5041 44.9188 37.4446 45.0051 37.3694 45.0767C37.2959 45.1487 37.2088 45.2053 37.1133 45.2435C37.0177 45.2816 36.9156 45.3005 36.8127 45.2991L36.8118 45.3ZM36.8118 36.5841C36.7675 36.5827 36.7235 36.5908 36.6826 36.6081C36.6418 36.6253 36.6052 36.6511 36.5753 36.6838C36.5426 36.7165 36.5169 36.7555 36.4998 36.7984C36.4826 36.8413 36.4744 36.8873 36.4756 36.9335V44.5209C36.4756 44.6197 36.5056 44.6964 36.5727 44.7609C36.705 44.8932 36.9221 44.8941 37.0633 44.7582C37.0958 44.7279 37.1215 44.6909 37.1386 44.6498C37.1556 44.6087 37.1636 44.5644 37.1621 44.52V40.9906H41.2006C41.2423 40.9921 41.2838 40.985 41.3227 40.9698C41.3615 40.9547 41.3969 40.9317 41.4265 40.9023C41.4554 40.8754 41.4782 40.8425 41.4933 40.806C41.5083 40.7694 41.5154 40.7301 41.5139 40.6906C41.5139 40.6006 41.4856 40.53 41.423 40.4682C41.3603 40.4064 41.2906 40.3773 41.2006 40.3773H37.1621V37.1964H41.6356C41.677 37.1979 41.7181 37.1909 41.7567 37.1758C41.7952 37.1608 41.8303 37.1381 41.8597 37.1091C41.8886 37.0821 41.9114 37.0493 41.9265 37.0127C41.9416 36.9762 41.9486 36.9368 41.9471 36.8973C41.9485 36.8558 41.9412 36.8145 41.9255 36.776C41.9099 36.7375 41.8862 36.7028 41.8562 36.6741C41.8277 36.6446 41.7933 36.6214 41.7554 36.606C41.7174 36.5905 41.6766 36.583 41.6356 36.5841H36.8118Z" fill="white"></path>
                                    </svg>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></a>
                            </li>
                            <li class="item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                    <path d="M53.625 4.40731V55.5926C53.625 56.2947 53.3461 56.9679 52.8497 57.4644C52.3533 57.9608 51.68 58.2397 50.9779 58.2397H9.02206C8.32002 58.2397 7.64673 57.9608 7.15031 57.4644C6.65389 56.9679 6.375 56.2947 6.375 55.5926V12.3838H14.3603C15.0623 12.3838 15.7356 12.1049 16.232 11.6085C16.7285 11.1121 17.0074 10.4388 17.0074 9.73672V1.76025H50.9779C51.68 1.76025 52.3533 2.03914 52.8497 2.53556C53.3461 3.03198 53.625 3.70527 53.625 4.40731Z" fill="#E9EDF4"></path>
                                    <path d="M6.375 12.3838H14.3603C15.0623 12.3838 15.7356 12.1049 16.232 11.6085C16.7285 11.1121 17.0074 10.4388 17.0074 9.73672V1.76025L6.375 12.3838Z" fill="#D2DBEA"></path>
                                    <path d="M56.4706 34.5776V46.86C56.4706 47.562 56.1917 48.2353 55.6953 48.7317C55.1989 49.2281 54.5256 49.507 53.8235 49.507H6.17648C5.47443 49.507 4.80114 49.2281 4.30472 48.7317C3.8083 48.2353 3.52942 47.562 3.52942 46.86V34.5776C3.52942 33.8756 3.8083 33.2023 4.30472 32.7058C4.80114 32.2094 5.47443 31.9305 6.17648 31.9305H53.8235C54.5256 31.9305 55.1989 32.2094 55.6953 32.7058C56.1917 33.2023 56.4706 33.8756 56.4706 34.5776Z" fill="#FF7101"></path>
                                    <path d="M46.3526 19.8503C46.3526 20.4838 45.8479 20.9885 45.2144 20.9885H14.7856C14.4837 20.9885 14.1942 20.8686 13.9807 20.6551C13.7673 20.4417 13.6473 20.1521 13.6473 19.8503C13.6473 19.5484 13.7673 19.2589 13.9807 19.0454C14.1942 18.832 14.4837 18.712 14.7856 18.712H45.2144C45.8479 18.712 46.3526 19.2167 46.3526 19.8503ZM46.3526 25.6826C46.3526 26.3162 45.8479 26.8209 45.2144 26.8209H14.7856C14.4837 26.8209 14.1942 26.7009 13.9807 26.4875C13.7673 26.274 13.6473 25.9845 13.6473 25.6826C13.6473 25.3807 13.7673 25.0912 13.9807 24.8778C14.1942 24.6643 14.4837 24.5444 14.7856 24.5444H45.2144C45.8479 24.5444 46.3526 25.05 46.3526 25.6826Z" fill="#D2DBEA"></path>
                                    <path d="M18.7748 44.9179C18.7223 44.8663 18.6809 44.8044 18.6533 44.7361C18.6257 44.6678 18.6123 44.5945 18.6142 44.5209V36.9335C18.6142 36.7773 18.6671 36.6423 18.7748 36.5312C18.8254 36.4769 18.887 36.4338 18.9554 36.405C19.0238 36.3761 19.0976 36.3619 19.1718 36.3635H21.998C22.7833 36.3635 23.4239 36.4959 23.9189 36.7606C24.4157 37.0253 24.7704 37.3641 24.9865 37.777C25.2001 38.19 25.3086 38.6365 25.3086 39.1156C25.3086 39.5947 25.2001 40.042 24.9857 40.455C24.7704 40.8679 24.4157 41.2068 23.9189 41.4715C23.4239 41.7362 22.7824 41.8685 21.998 41.8685H19.7418V44.5209C19.7433 44.5951 19.7291 44.6688 19.7002 44.7372C19.6714 44.8056 19.6284 44.8672 19.5742 44.9179C19.463 45.0247 19.328 45.0785 19.1709 45.0785C19.0139 45.0785 18.8815 45.0256 18.7748 44.9179ZM21.8868 40.8018C22.7295 40.8018 23.3224 40.6403 23.6648 40.3182C24.008 39.9962 24.1792 39.5947 24.1792 39.1156C24.1792 38.6365 24.008 38.235 23.6648 37.9129C23.3224 37.5909 22.7295 37.4294 21.8868 37.4294H19.7418V40.8018H21.8868Z" fill="white"></path>
                                    <path d="M19.1709 45.2999C19.0685 45.3011 18.9669 45.2816 18.8721 45.2426C18.7774 45.2037 18.6915 45.146 18.6195 45.0732C18.5461 45.0014 18.4883 44.9153 18.4494 44.8203C18.4106 44.7253 18.3916 44.6234 18.3936 44.5208V36.9335C18.3936 36.7182 18.4686 36.5311 18.6168 36.3776C18.688 36.3024 18.774 36.2427 18.8693 36.2023C18.9647 36.1619 19.0674 36.1417 19.1709 36.1429H21.998C22.8159 36.1429 23.4971 36.2849 24.023 36.5655C24.5559 36.8496 24.945 37.2229 25.1815 37.6746C25.4109 38.1185 25.5292 38.6029 25.5292 39.1155C25.5292 39.6282 25.4118 40.1126 25.1815 40.5564C24.9459 41.0082 24.5559 41.3814 24.023 41.6664C23.498 41.9461 22.8168 42.0882 21.998 42.0882H19.9624V44.5208C19.9636 44.6246 19.9434 44.7276 19.903 44.8232C19.8627 44.9189 19.803 45.0052 19.7277 45.0767C19.6542 45.1485 19.5673 45.2051 19.4719 45.2433C19.3765 45.2814 19.2745 45.3004 19.1718 45.299L19.1709 45.2999ZM19.1709 36.584C19.1267 36.5826 19.0826 36.5908 19.0418 36.608C19.001 36.6252 18.9643 36.6511 18.9345 36.6838C18.9018 36.7164 18.8761 36.7554 18.8589 36.7984C18.8418 36.8413 18.8336 36.8873 18.8348 36.9335V44.5208C18.8348 44.6196 18.8648 44.6964 18.9309 44.7608C19.0633 44.8932 19.2812 44.894 19.4224 44.7582C19.455 44.7279 19.4807 44.6909 19.4977 44.6498C19.5148 44.6087 19.5228 44.5644 19.5212 44.5199V41.647H21.998C22.7436 41.647 23.355 41.5226 23.8156 41.2764C24.2692 41.0346 24.5965 40.724 24.7906 40.3526C24.9874 39.9732 25.088 39.5567 25.088 39.1155C25.088 38.6743 24.9874 38.2588 24.7906 37.8785C24.5965 37.5079 24.2683 37.1964 23.8156 36.9546C23.3542 36.7085 22.7427 36.584 21.998 36.584H19.1709ZM21.8868 41.0223H19.5212V37.2088H21.8859C22.7948 37.2088 23.4274 37.3861 23.8156 37.7523C24.2039 38.1167 24.3998 38.5755 24.3998 39.1155C24.3998 39.6555 24.2039 40.1143 23.8156 40.4788C23.4274 40.8449 22.7956 41.0223 21.8868 41.0223ZM19.9624 40.5811H21.8859C22.6668 40.5811 23.2148 40.4382 23.5139 40.1576C23.8139 39.8752 23.9586 39.5355 23.9586 39.1155C23.9586 38.6955 23.813 38.3549 23.5139 38.0743C23.2148 37.792 22.6668 37.6508 21.8868 37.6508H19.9624V40.5811ZM27.1059 44.8552C27.0533 44.8036 27.0117 44.7418 26.984 44.6735C26.9562 44.6052 26.9427 44.5319 26.9445 44.4582V36.9335C26.9445 36.7773 26.9974 36.6423 27.1059 36.5311C27.1565 36.4769 27.2179 36.434 27.2862 36.4051C27.3544 36.3762 27.428 36.362 27.5021 36.3635H29.9939C30.9353 36.3635 31.7356 36.5726 32.393 36.9899C33.0266 37.382 33.5394 37.9417 33.8745 38.6073C34.2045 39.269 34.3695 39.9626 34.3695 40.6896C34.3695 41.4167 34.2045 42.1111 33.8745 42.7729C33.5392 43.4385 33.0261 43.9983 32.3921 44.3902C31.7356 44.8085 30.9362 45.0167 29.9939 45.0167H27.503C27.4293 45.0184 27.356 45.005 27.2877 44.9772C27.2194 44.9494 27.1575 44.9079 27.1059 44.8552ZM29.858 43.9632C30.5348 43.9632 31.1295 43.8246 31.6421 43.5476C32.1408 43.2846 32.5538 42.8844 32.8324 42.3943C33.113 41.9029 33.2542 41.3355 33.2542 40.6905C33.2542 40.0455 33.113 39.4773 32.8324 38.9858C32.5535 38.4959 32.1406 38.0958 31.6421 37.8326C31.1303 37.5555 30.5348 37.4179 29.858 37.4179H28.0721V43.9632H29.858Z" fill="white"></path>
                                    <path d="M29.9939 45.2373H27.503C27.4005 45.2387 27.2987 45.2194 27.2038 45.1806C27.1089 45.1418 27.0228 45.0842 26.9506 45.0114C26.8773 44.9396 26.8195 44.8536 26.7806 44.7586C26.7418 44.6636 26.7228 44.5617 26.7248 44.4591V36.9335C26.7248 36.7182 26.7998 36.5311 26.948 36.3776C27.0193 36.3023 27.1054 36.2425 27.2009 36.2021C27.2964 36.1617 27.3993 36.1416 27.503 36.1429H29.9948C30.975 36.1429 31.8212 36.3652 32.5121 36.8038C33.1789 37.2178 33.7187 37.8076 34.0721 38.5085C34.4129 39.1852 34.5904 39.9324 34.5904 40.6901C34.5904 41.4478 34.4129 42.195 34.0721 42.8717C33.7187 43.5726 33.1789 44.1624 32.5121 44.5764C31.8212 45.0149 30.9742 45.2373 29.9939 45.2373ZM27.5021 36.5841C27.4577 36.5825 27.4135 36.5906 27.3725 36.6078C27.3315 36.6251 27.2947 36.651 27.2648 36.6838C27.2321 36.7164 27.2064 36.7554 27.1892 36.7984C27.1721 36.8413 27.1639 36.8873 27.165 36.9335V44.4591C27.165 44.557 27.195 44.6338 27.2621 44.6991C27.2932 44.7309 27.3306 44.7568 27.3719 44.7734C27.4133 44.79 27.4576 44.7977 27.5021 44.7961H29.9939C30.8895 44.7961 31.6562 44.5967 32.2748 44.2049C32.874 43.8333 33.3591 43.3036 33.6768 42.6741C33.9874 42.0588 34.1491 41.3793 34.1491 40.6901C34.1491 40.0009 33.9874 39.3214 33.6768 38.7061C33.359 38.0769 32.8738 37.5476 32.2748 37.1761C31.6562 36.7835 30.8895 36.5849 29.9939 36.5849H27.503L27.5021 36.5841ZM29.858 44.1838H27.8515V37.1964H29.858C30.5674 37.1964 31.2036 37.3455 31.7471 37.6376C32.2942 37.9341 32.7239 38.3505 33.0239 38.8755C33.3239 39.4005 33.4748 40.0111 33.4748 40.6905C33.4748 41.3699 33.3239 41.9805 33.0239 42.5038C32.7244 43.0292 32.2816 43.4586 31.7471 43.7417C31.2045 44.0346 30.5683 44.1838 29.858 44.1838ZM28.2927 43.7426H29.858C30.4942 43.7426 31.0598 43.6111 31.5371 43.3544C32.01 43.0985 32.3815 42.7385 32.6409 42.2849C32.9012 41.8288 33.0336 41.2923 33.0336 40.6905C33.0336 40.0888 32.9012 39.5523 32.6409 39.0952C32.3816 38.642 31.9992 38.2715 31.538 38.0267C31.0589 37.7691 30.4942 37.6385 29.858 37.6385H28.2927V43.7426ZM36.4156 44.9179C36.3631 44.8662 36.3218 44.8043 36.2941 44.736C36.2665 44.6677 36.2532 44.5945 36.255 44.5208V36.9335C36.255 36.7773 36.308 36.6423 36.4156 36.5311C36.4663 36.4768 36.5278 36.4338 36.5963 36.4049C36.6647 36.376 36.7384 36.3619 36.8127 36.3635H41.6348C41.783 36.3635 41.9092 36.4155 42.0124 36.5188C42.1156 36.622 42.1677 36.7482 42.1677 36.8964C42.1677 37.0446 42.1156 37.1699 42.0124 37.2688C41.9092 37.3676 41.783 37.417 41.6348 37.417H37.3827V40.1567H41.2006C41.3506 40.1567 41.4759 40.2096 41.5792 40.312C41.6824 40.4152 41.7345 40.5414 41.7345 40.6905C41.7345 40.8388 41.6824 40.9632 41.5792 41.062C41.4759 41.1608 41.3497 41.2102 41.2006 41.2102H37.3827V44.5208C37.3842 44.5951 37.37 44.6688 37.3411 44.7372C37.3122 44.8056 37.2693 44.8672 37.215 44.9179C37.1039 45.0246 36.9689 45.0785 36.8127 45.0785C36.6565 45.0785 36.5233 45.0255 36.4156 44.9179Z" fill="white"></path>
                                    <path d="M36.8118 45.3C36.7094 45.3011 36.6077 45.2816 36.513 45.2427C36.4183 45.2037 36.3323 45.1461 36.2603 45.0732C36.187 45.0014 36.1291 44.9154 36.0903 44.8204C36.0515 44.7254 36.0324 44.6235 36.0344 44.5209V36.9335C36.0344 36.7182 36.1094 36.5311 36.2577 36.3776C36.329 36.3023 36.4151 36.2425 36.5106 36.2022C36.6061 36.1618 36.709 36.1416 36.8127 36.1429H41.6347C41.7339 36.1413 41.8323 36.1599 41.9241 36.1975C42.0159 36.2352 42.099 36.291 42.1686 36.3617C42.2391 36.4316 42.295 36.5149 42.3327 36.6068C42.3704 36.6986 42.3893 36.7971 42.3883 36.8964C42.388 36.9948 42.3683 37.092 42.3302 37.1827C42.2921 37.2733 42.2364 37.3555 42.1663 37.4244C42.0962 37.4934 42.0131 37.5477 41.9219 37.5843C41.8306 37.6209 41.733 37.639 41.6347 37.6376H37.6033V39.9361H41.2006C41.3 39.9346 41.3986 39.9532 41.4906 39.991C41.5825 40.0288 41.6658 40.0849 41.7353 40.1559C41.8063 40.2254 41.8624 40.3087 41.9002 40.4006C41.9379 40.4925 41.9566 40.5912 41.955 40.6906C41.9564 40.7897 41.9373 40.8881 41.8989 40.9795C41.8605 41.0709 41.8036 41.1533 41.7318 41.2217C41.6614 41.2899 41.5783 41.3435 41.4871 41.3794C41.3959 41.4152 41.2986 41.4327 41.2006 41.4309H37.6033V44.5209C37.6046 44.6246 37.5845 44.7275 37.5443 44.8232C37.5041 44.9188 37.4446 45.0051 37.3694 45.0767C37.2959 45.1487 37.2088 45.2053 37.1133 45.2435C37.0177 45.2816 36.9156 45.3005 36.8127 45.2991L36.8118 45.3ZM36.8118 36.5841C36.7675 36.5827 36.7235 36.5908 36.6826 36.6081C36.6418 36.6253 36.6052 36.6511 36.5753 36.6838C36.5426 36.7165 36.5169 36.7555 36.4998 36.7984C36.4826 36.8413 36.4744 36.8873 36.4756 36.9335V44.5209C36.4756 44.6197 36.5056 44.6964 36.5727 44.7609C36.705 44.8932 36.9221 44.8941 37.0633 44.7582C37.0958 44.7279 37.1215 44.6909 37.1386 44.6498C37.1556 44.6087 37.1636 44.5644 37.1621 44.52V40.9906H41.2006C41.2423 40.9921 41.2838 40.985 41.3227 40.9698C41.3615 40.9547 41.3969 40.9317 41.4265 40.9023C41.4554 40.8754 41.4782 40.8425 41.4933 40.806C41.5083 40.7694 41.5154 40.7301 41.5139 40.6906C41.5139 40.6006 41.4856 40.53 41.423 40.4682C41.3603 40.4064 41.2906 40.3773 41.2006 40.3773H37.1621V37.1964H41.6356C41.677 37.1979 41.7181 37.1909 41.7567 37.1758C41.7952 37.1608 41.8303 37.1381 41.8597 37.1091C41.8886 37.0821 41.9114 37.0493 41.9265 37.0127C41.9416 36.9762 41.9486 36.9368 41.9471 36.8973C41.9485 36.8558 41.9412 36.8145 41.9255 36.776C41.9099 36.7375 41.8862 36.7028 41.8562 36.6741C41.8277 36.6446 41.7933 36.6214 41.7554 36.606C41.7174 36.5905 41.6766 36.583 41.6356 36.5841H36.8118Z" fill="white"></path>
                                    </svg>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></a>
                            </li>
                            <li class="item upload">
                                <div class="inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M15 20.625V12.1875M15 12.1875L18.75 15.9375M15 12.1875L11.25 15.9375M8.43751 24.375C7.0993 24.3765 5.80441 23.9008 4.78539 23.0334C3.76636 22.166 3.08995 20.9637 2.87765 19.6424C2.66534 18.3212 2.93104 16.9675 3.62704 15.8245C4.32303 14.6815 5.40371 13.8241 6.67501 13.4063C6.34839 11.7327 6.68596 9.99778 7.61624 8.5688C8.54653 7.13981 9.99647 6.12902 11.659 5.75046C13.3216 5.37191 15.0662 5.65531 16.5235 6.54067C17.9807 7.42602 19.0361 8.8438 19.4663 10.4938C20.1313 10.2775 20.8435 10.2515 21.5225 10.4186C22.2016 10.5858 22.8203 10.9395 23.3089 11.4398C23.7975 11.9401 24.1365 12.5671 24.2875 13.2499C24.4386 13.9326 24.3957 14.6441 24.1638 15.3038C25.1871 15.6947 26.0413 16.4314 26.5782 17.3862C27.1151 18.341 27.3009 19.4537 27.1033 20.5311C26.9057 21.6086 26.3372 22.5829 25.4963 23.285C24.6555 23.9871 23.5954 24.3727 22.5 24.375H8.43751Z" stroke="#FF7101" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <a href="#" class="upload">Upload file</a>
                                </div>
                            </li>
                        </ul>
                    </div> --}}

                        <div class="group-button-submit">
                            <button type="submit" class="pre-btn">List Now</button>
                            <button type="submit" class="second-btn">Save &amp; Preview</button>
                        </div>

                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
