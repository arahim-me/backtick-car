@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <form class="tfcl-dashboard" action="{{ route('dashboard.export.update', $car->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h1 class="admin-title mb-3">Edit Export listing</h1>

                        <div class="tfcl-add-listing upload-photo">
                            <h3>Upload Photo</h3>
                            <div class="upload-media choose-box">
                                <div class="inner">
                                    <input type="file" name="image" id="image"
                                        onchange="document.getElementById('product_thumbnail').src = window.URL.createObjectURL(this.files[0])">
                                    {{-- <div class="desc mt-3">or drag photos here <br> <span>(Up to 10 photos)</span> </div> --}}
                                </div>
                            </div>
                            <div class="thumbnail-media">
                                <div class="item">
                                    @if ($car->image == null)
                                        <img src="{{ asset('uploads') }}/default/image-gallery.png" id="product_thumbnail"
                                            alt="thumb">
                                    @else
                                        <img src="{{ asset('uploads/products/exports') }}/{{ $car->image }}"
                                            id="product_thumbnail" alt="thumb">
                                    @endif
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

                        <div class="tfcl-add-listing car-details">
                            <h3>Car details</h3>

                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="listing_title">Listing Title: ( <span
                                            class="text-primary">{{ $car->title }}</span> )</label>
                                    <input type="text" class="form-control" name="title" value="{{$car->title}}">
                                </div>
                                <div class="form-group-2 ms-0">
                                    <div class="form-group">
                                        <label for="brandName">Brand Name: ( <span
                                                class="text-primary">{{ $car->brand_name }}</span> )</label>
                                        <input type="text" class="form-control" name="brand_name"
                                        value="{{$car->brand_name}}" id="brandName">
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model: ( <span class="text-primary">{{ $car->model }}</span>
                                            )</label>
                                        <input type="text" class="form-control" name="model" value="{{$car->model}}"
                                            id="model">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="fuel_type">Fuel Type: ( <span
                                            class="text-primary">{{ $car->fuel_type }}</span> )</label>

                                    <select class="nice-select form-control" tabindex="0" name="fuel_type">
                                        <option class="optoin" value="Petrol" {{ $car->fuel_type == 'Petrol' ? 'selected' : '' }}>
                                            Petrol</option>
                                        <option class="option" value="LPG" {{ $car->fuel_type == 'LPG' ? 'selected' : '' }}>LPG</option>
                                        <option class="option" value="Disel" {{ $car->fuel_type == 'Disel' ? 'selected' : '' }}>Disel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Color: ( <span
                                        class="text-primary">{{ $car->color }}</span> )</label>
                                    <input type="text" class="form-control" name="color" value="{{$car->color}}"
                                        id="color">
                                </div>
                                <div class="form-group">
                                    <label for="years">Years: ( <span
                                        class="text-primary">{{ $car->years }}</span> )</label>
                                    <select class="nice-select form-control" tabindex="0" name="years">
                                        @for ($i = date('Y'); $i >= 1990; $i--)
                                            <option value="{{ $i }}" {{ $car->years == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contdition">Condition: ( <span
                                        class="text-primary">{{ $car->condition }}</span> )</label>

                                    <select class="nice-select form-control" tabindex="0" name="condition">
                                        <option class="optoin" value="Used" {{ $car->condition == 'Used' ? 'selected' : '' }}>Used</option>
                                        <option class="option" value="New" {{ $car->condition == 'New' ? 'selected' : '' }}>New</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="status">Status: ( <span
                                        class="text-primary text-capitalize">{{ $car->status }}</span> )</label>
                                    <select name="status" id="status" class="nice-select form-control"
                                        tabindex="0">
                                        <option value="exported" {{ $car->status == 'exported' ? 'selected' : '' }}>Exported</option>
                                        <option value="processing" {{ $car->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                    </select>
                                    {{-- <input type="text" name="status" class="form-control" id="status" placeholder="Export To (Country)"> --}}
                                </div>
                                <div class="form-group">
                                    <label for="export_to">Export to (Country): ( <span
                                        class="text-primary">{{ $car->export_to }}</span> )</label>
                                    <input type="text" name="export_to" class="form-control" id="export_to"
                                        value="{{$car->export_to}}">
                                </div>
                                <div class="form-group">
                                    <label for="Importer">Importer Name: ( <span
                                        class="text-primary">{{ $car->importer }}</span> )</label>
                                    <input type="text" class="form-control" name="importer"
                                        value="{{$car->importer}}" id="Importer">
                                </div>
                            </div>
                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="price h-3">Car price: ( <span
                                        class="text-primary">&yen {{ $car->price }}</span> )</label>
                                    <input type="number" class="form-control" name="price" value="{{$car->price}}"
                                        id="price">
                                </div>
                            </div>

                            <div class="form-group-2 mb-0">
                                <div class="form-group">
                                    <label for="description">Description: ( <span
                                        class="text-primary">{{ $car->description }}</span> )</label>
                                    <textarea name="description" id="description" placeholder="Update Your Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="group-button-submit">
                            <button type="submit" class="pre-btn">List Now</button>
                        </div>

                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
