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
                                                            <label for="roel$permission_search">Search roel$permission *</label>
                                                            <input type="text" name="roel$permission_search" id="roel$permission_search"
                                                                placeholder="Search by roel$permissionname, email, etc...">
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <form action="" method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="permission">Select permission *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="roel$permission_permission">
                                                                @foreach ($permissions as $permission)
                                                                    <option class="optoin" value="{{ $permission->name }}">
                                                                        {{ $permission->name }}
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
                                                            <label for="permission">Select Status *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="roel$permission_permission">
                                                                @foreach ($permissions as $permission)
                                                                    <option class="optoin" value="{{ $permission->name }}">
                                                                        {{ $permission->name }}
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
                                                        <span class="result-text"><b>{{ $permissions->count() }}</b>
                                                            Results
                                                            found</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="{{ route('categories.create') }}"
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
                                                            <th>Permission</th>
                                                            <th>Created at</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tfcl-table-content">
                                                        @forelse ($permissions as $permission)
                                                            <tr>
                                                                <td class="column-listing text-capitalize">
                                                                    <p>{{ $permission->name }}</p>
                                                                </td>
                                                                <td class="column-date">
                                                                    <div class="tfcl-listing-date">
                                                                        {{ $permission->created_at }}</div>
                                                                </td>
                                                                <td class="column-controller">
                                                                    <a href="{{ route('categories.edit', [$permission->id]) }}"
                                                                        class="btn-action tfcl-dashboard-action-edit"><i
                                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                                    <a href="{{ route('categories.update.status', [$permission->id]) }}"
                                                                        class="btn-action tfcl-dashboard-action-edit text-capitalize"><i
                                                                            class="fa-solid fa-circle-check text-{{ $permission->status == 'active' ? 'success' : 'danger' }}"></i></a>
                                                                    <a href="{{ route('categories.destroy', $permission->id) }}"
                                                                        class="btn-action tfcl-dashboard-action-edit"
                                                                        onclick="return confirm('Are you sure you want to delete this roel$permission?');"><i
                                                                            class="fa-solid fa-trash-can"></i></a>
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
