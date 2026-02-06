@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <form class="tfcl-dashboard" action="{{ route('roles.update', [$role->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h1 class="admin-title mb-3">Edit role</h1>

                        <div class="tfcl-add-listing car-details">
                            <h3>Role details</h3>

                            <div class="form-group-2">
                                <div class="form-group">
                                    <label for="listing_title">Role name *</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter role name"
                                        value="{{ $role->name }}">
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
