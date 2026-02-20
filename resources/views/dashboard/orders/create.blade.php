@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <form class="tfcl-dashboard" action="{{ route('store.listing') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h1 class="admin-title mb-3">{{ $title }}</h1>
                        <x-error></x-error>

                        <div class="tfcl-add-listing upload-photo">
                            <h3>Product Info *</h3>
                            <div class="thumbnail-media">
                                <div class="item" id="previewThumbnailItem">
                                    <img src="{{ asset('uploads') }}/default/image-gallery.png" id="previewThumbnail"
                                        class="product_thumbnails" alt="thumb"
                                        style="height: 120px; width: auto; object-fit: cover; border-radius:4px;">
                                    <a id="previewThumbnailDelete" href="#" style="display:none;"
                                        onclick="document.getElementById('imgInput').value=''; document.getElementById('previewThumbnail').src='{{ asset('uploads') }}/default/image-gallery.png'; this.style.display='none'; return false;"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
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
                                    <label for="listing_title">Listing Title *</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter title"
                                        required>
                                </div>
                            </div>
                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="model">Model *</label>
                                    <input type="text" class="form-control" name="model" placeholder="Model"
                                        id="model" list="models" required>
                                    <datalist id="models">

                                    </datalist>
                                </div>

                                <div class="form-group">
                                    <label for="years">Years *</label>
                                    <select class="nice-select form-control" tabindex="0" name="year" required>
                                        @for ($i = date('Y'); $i >= 1990; $i--)
                                            <option value={{ $i }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="stock-number">Stock Number</label>
                                    <input type="text" class="form-control" name="stock_number" placeholder="Number"
                                        id="sock-number">
                                </div>

                                <div class="form-group">
                                    <label for="mileage">Mileage</label>
                                    <input type="number" class="form-control" name="mileage" placeholder="Mileage"
                                        id="mileage">
                                </div>
                                <div class="form-group">
                                    <label for="transmision">Transmission</label>
                                    <input type="number" class="form-control" name="transmision" placeholder="Transmission"
                                        id="transmision">

                                </div>
                            </div>

                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="driver_type">Driver Type</label>
                                    <select class="nice-select form-control" tabindex="0" name="driver_type">
                                        <option class="optoin" value="Auto">Auto</option>
                                        <option class="option" value="Manual">Manual</option>
                                        <option class="option" value="Semi-Auto">Semi Auto</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="engine_size">Engine Size</label>
                                    <input type="text" class="form-control" name="engine_size" placeholder="Engine size"
                                        id="engine_size">
                                </div>
                                <div class="form-group">
                                    <label for="Cylinders">Cylinders</label>
                                    <input type="text" class="form-control" name="cylinders" placeholder="Cylinders"
                                        id="Cylinders">

                                </div>
                                <div class="form-group">
                                    <label for="fuel_type">Fuel Type</label>
                                    <select class="nice-select form-control" tabindex="0" name="fuel_type">
                                        <option class="optoin" value="Petrol">Petrol</option>
                                        <option class="option" value="LPG">LPG</option>
                                        <option class="option" value="Disel">Disel</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="doors">Doors</label>
                                    <select class="nice-select form-control" tabindex="0" name="doors">
                                        <option class="optoin" value="2">3</option>
                                        <option class="option" value="4">4</option>
                                        <option class="option" value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" name="color" placeholder="Color"
                                        id="color">
                                </div>
                                <div class="form-group">
                                    <label for="seats">Seats *</label>
                                    <select class="nice-select form-control" tabindex="0" name="seats" required>
                                        @for ($i = 2; $i <= 8; $i++)
                                            <option value={{ $i }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tyer_type">Tyer Type</label>
                                    <select name="tyer_type" id="tyer_type" class="nice-select" tabindex="1">
                                        <option class="option" value="Summer">Summer</option>
                                        <option class="option" value="Winter">Winter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group-4">
                                <div class="form-group">
                                    <label for="weight">Weight {{ '(KG)' }}</label>
                                    <input type="number" class="form-control" name="weight" placeholder="Weight"
                                        id="weight">
                                </div>
                                <div class="form-group">
                                    <label for="dimension">Dimension {{ '(Fit)' }}</label>
                                    <input type="number" class="form-control" name="dimension" placeholder="Dimension"
                                        id="dimension">
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" placeholder="Your description"></textarea>
                            </div>

                        </div>
                        <div class="tfcl-add-listing car-price row">
                            <h3>Car price *</h3>
                            <div class="row">
                                <div class="form-group mb-0 col-md-2">
                                    <label for="currency">Currency</label>
                                    <select name="currency" id="currency" class="nice-select" tabindex="1">
                                        <option class="option" value="¥">yen (¥)</option>
                                        <option class="option" value="$">usd ($)</option>
                                        <option class="option" value="৳">bdt (৳)</option>
                                    </select>
                                </div>
                                <div class="form-group mb-0 col-md-3">
                                    <label for="price">Full price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Car price"
                                        id="price" required>
                                </div>
                            </div>
                        </div>
                        <div class="group-button-submit">
                            <button type="submit" class="pre-btn">List Now</button>
                            <button type="submit" class="second-btn">Save &amp; Preview</button>
                        </div>

                    </form>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        // document.getElementById('thumbInputMedia').addEventListener('click', function(e) {
        //     e.preventDefault(); // Prevents default behavior
        //     // e.stopPropagation(); // Prevents bubbling
        //     document.getElementById('thumbInputBtn').click();
        // });


        $('#brand').on('change', function(e) {
            var brandId = $(this).val().trim();

            // Only trigger AJAX if brand ID is not empty
            if (!brandId) {
                $('#models').empty();
                return;
            }

            console.log('Fetching models for brand ID:', brandId);
            $.ajax({
                method: 'POST',
                url: '{{ route('model.query.by.brand') }}',
                data: {
                    'brand_id': brandId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log('Models received:', response.models);
                    // Clear existing options
                    $('#models').empty();

                    // Add new options
                    $.each(response.models, function(key, item) {
                        $('#models').append(`
                            <option class="option text-uppercase" value="${item.name}">
                                ${item.name}
                            </option>
                        `);
                    });
                },
                error: function(response) {
                    console.log('Error fetching models:', response);
                    $('#models').empty();
                }
            });
        });
    </script>
@endsection
