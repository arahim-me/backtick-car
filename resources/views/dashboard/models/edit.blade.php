@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <form class="tfcl-dashboard" action="{{ route('models.update', [$model->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h1 class="admin-title mb-3">{{ $title }}</h1>

                        <div class="tfcl-add-listing car-details">
                            <h3>Model details</h3>

                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="listing_title">Model name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $model->name }}"
                                        placeholder="Enter model name">
                                </div>
                            </div>
                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="listing_title">Brand *</label>
                                    <select class="nice-select form-control" name="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $model->brand_id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-button-submit">
                            <button type="submit" class="pre-btn">Update</button>
                        </div>

                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
