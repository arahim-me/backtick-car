@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area pt-4 pb-0">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-2">{{ $title }}</h1>

                        <div class="tfcl-dashboard-middle mt-2">
                            <div class="row">
                                <div class="tfcl-dashboard-middle-left col-md-12">
                                    <div class="tfcl-dashboard-listing">
                                        {{-- <div class="row">
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <form action={{ route('search') }} method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="roel$role_search">Search roel$role *</label>
                                                            <input type="text" name="roel$role_search" id="roel$role_search"
                                                                placeholder="Search by roel$rolename, email, etc...">
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <form action="" method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="role">Select Role *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="roel$role_role">
                                                                @foreach ($roles as $role)
                                                                    <option class="optoin" value="{{ $role->name }}">
                                                                        {{ $role->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Filter</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <form action={{ route('search') }} method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="role">Select Status *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="roel$role_role">
                                                                @foreach ($roles as $role)
                                                                    <option class="optoin" value="{{ $role->name }}">
                                                                        {{ $role->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Filter</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div> --}}

                                        <div class="tfcl-table-listing">
                                            <div class="table-responsive">
                                                <div class="d-flex justify-content-between p-2">
                                                    <div class="d-flex">
                                                        <span class="result-text"><b>{{ $brands->count() }}</b>
                                                            Results
                                                            found</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="{{ route('brands.create') }}"
                                                            class="tf-btn-arrow wow fadeInUpSmall d-flex align-items-center"
                                                            data-wow-delay="0.3s" data-wow-duration="1000ms"
                                                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.3s; animation-name: fadeInUpSmall;">Add
                                                            New<i class="fa-solid fa-plus"
                                                                style="font-size: 18px; margin-left: 10px;"></i></a>
                                                    </div>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Creating Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tfcl-table-content">
                                                        @forelse ($brands as $brand)
                                                            <tr>
                                                                <td class="column-listing text-uppercase">
                                                                    <p>{{ $brand->name }}</p>
                                                                </td>
                                                                <td class="column-date">
                                                                    <div class="tfcl-listing-date">
                                                                        {{ $brand->created_at }}</div>
                                                                </td>
                                                                <td class="column-controller">
                                                                    @if ($brand->id > 8)
                                                                        <a href="{{ route('brands.edit', [$brand->id]) }}"
                                                                            class="btn-action tfcl-dashboard-action-edit"><i
                                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                                    @else
                                                                        <a href="javascript:void(0)"
                                                                            class="btn-action tfcl-dashboard-action-edit disabled"
                                                                            aria-disabled="true" tabindex="-1"
                                                                            title="Editing disabled for system roles"
                                                                            style="pointer-events: none; opacity: 0.5; cursor: not-allowed;"><i
                                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                                    @endif
                                                                    @if ($brand->id > 8)
                                                                        <form
                                                                            action="{{ route('brands.destroy', $brand->id) }}"
                                                                            method="POST" style="display:inline;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn-action tfcl-dashboard-action-edit"
                                                                                onclick="return confirm('Are you sure you want to delete this role?');"
                                                                                style="background:none;border:none;padding:0;"><i
                                                                                    class="fa-solid fa-trash-can"></i></button>
                                                                        </form>
                                                                    @else
                                                                        <a href="javascript:void(0)"
                                                                            class="btn-action tfcl-dashboard-action-edit disabled"
                                                                            aria-disabled="true" tabindex="-1"
                                                                            title="Delete disabled for system roles"
                                                                            style="pointer-events: none; opacity: 0.5; cursor: not-allowed;"><i
                                                                                class="fa-solid fa-trash-can"></i></a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <h4>No Data Found</h4>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

@endsection
