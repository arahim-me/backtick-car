@php
    $user = auth()->user();
@endphp
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
                                        <div class="row">

                                            {{-- <div class="col-xl-3 col-lg-6 mb-2">
                                                <div class="group-input-icon">
                                                    <input type="text" id="from-date"
                                                        class="datetimepicker hasDatepicker" name="from_date" value=""
                                                        placeholder="From Date">
                                                    <span class="datepicker-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            height="18" viewBox="0 0 19 18" fill="none">
                                                            <path
                                                                d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                stroke="#B6B6B6" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 mb-2">
                                                <div class="group-input-icon">
                                                    <input type="text" id="to-date"
                                                        class="datetimepicker hasDatepicker" name="to_date" value=""
                                                        placeholder="To Date">
                                                    <span class="datepicker-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            height="18" viewBox="0 0 19 18" fill="none">
                                                            <path
                                                                d="M5.5625 2.25V3.9375M13.4375 2.25V3.9375M2.75 14.0625V5.625C2.75 5.17745 2.92779 4.74823 3.24426 4.43176C3.56072 4.11529 3.98995 3.9375 4.4375 3.9375H14.5625C15.0101 3.9375 15.4393 4.11529 15.7557 4.43176C16.0722 4.74823 16.25 5.17745 16.25 5.625V14.0625M2.75 14.0625C2.75 14.5101 2.92779 14.9393 3.24426 15.2557C3.56072 15.5722 3.98995 15.75 4.4375 15.75H14.5625C15.0101 15.75 15.4393 15.5722 15.7557 15.2557C16.0722 14.9393 16.25 14.5101 16.25 14.0625M2.75 14.0625V8.4375C2.75 7.98995 2.92779 7.56073 3.24426 7.24426C3.56072 6.92779 3.98995 6.75 4.4375 6.75H14.5625C15.0101 6.75 15.4393 6.92779 15.7557 7.24426C16.0722 7.56073 16.25 7.98995 16.25 8.4375V14.0625M9.5 9.5625H9.506V9.5685H9.5V9.5625ZM9.5 11.25H9.506V11.256H9.5V11.25ZM9.5 12.9375H9.506V12.9435H9.5V12.9375ZM7.8125 11.25H7.8185V11.256H7.8125V11.25ZM7.8125 12.9375H7.8185V12.9435H7.8125V12.9375ZM6.125 11.25H6.131V11.256H6.125V11.25ZM6.125 12.9375H6.131V12.9435H6.125V12.9375ZM11.1875 9.5625H11.1935V9.5685H11.1875V9.5625ZM11.1875 11.25H11.1935V11.256H11.1875V11.25ZM11.1875 12.9375H11.1935V12.9435H11.1875V12.9375ZM12.875 9.5625H12.881V9.5685H12.875V9.5625ZM12.875 11.25H12.881V11.256H12.875V11.25Z"
                                                                stroke="#B6B6B6" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <form action={{ route('users.query') }} method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="user_search">Search user *</label>
                                                            <input type="text" name="user_search" id="user_search"
                                                                placeholder="Search by username, email, etc...">
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- <div class="form-group col-md-4">
                                                    <form action="{{ route('users.query') }}" method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="role">Select Role *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="user_role">
                                                                <option value="" disabled selected>Select Role
                                                                </option>
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
                                                </div> --}}
                                                {{-- <div class="form-group col-md-4">
                                                    <form action={{ route('users.query') }} method="GET">
                                                        @csrf
                                                        <div class="form-control row g-2">
                                                            <label for="role">Select Status *</label>
                                                            <select class="nice-select form-control" tabindex="0"
                                                                name="user_status">
                                                                <option value="" disabled selected>Select Status
                                                                </option>
                                                                @foreach ($statuses as $status)
                                                                    <option class="optoin" value="{{ $status->name }}">
                                                                        {{ $status->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <button type="submit"
                                                                class="btn btn-warning object-fit-contain">Filter</button>
                                                        </div>
                                                    </form>
                                                </div> --}}

                                            </div>
                                        </div>

                                        <div class="tfcl-table-listing">
                                            <div class="table-responsive">
                                                <div class="d-flex justify-content-between p-2">
                                                    <div class="d-flex">
                                                        <span class="result-text"><b>{{ $sellers->count() }}</b>
                                                            Results
                                                            found</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a
                                                            href="{{ route('seller.index') }}"class="btn btn-dark object-fit-contain"><i
                                                                class="fa-solid fa-brush me-2"></i>Clear Filter</a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="{{ route('users.create') }}"
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
                                                            <th>Shop Info</th>
                                                            <th>User Info</th>
                                                            <th>Status</th>
                                                            <th>Member Since</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tfcl-table-content">
                                                        @forelse ($sellers as $seller)
                                                            <tr>
                                                                <td class="column-listing">
                                                                    {{-- {{ $seller->name }} --}}
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <p>Shop Name: {{ $seller->name }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>Email: {{ $seller->email }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>Phone: {{ $seller->phone }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>Address: {{ $seller->address }}</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="column-listing">
                                                                    {{-- <p class="ms-2">{{ $seller->user->email }}</p> --}}
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <p>Name: {{ $seller->user->name }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>E-mail: {{ $seller->user->email }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>Phone: {{ $seller->user->phone }}</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <p>Address: {{ $seller->user->location }}</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="column-listing">
                                                                    <div class="column-listing text-capitalize">
                                                                        <p class="text-center">{{ $seller->status->name }}
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="column-listing">
                                                                    <div class="olumn-listing text-capitalize">
                                                                        <p class="text-center">
                                                                            {{ $seller->user->created_at->format('d-m-Y') }}
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="column-controller">
                                                                    <a href="{{ route('seller.show', [$seller->id]) }}"
                                                                        class="btn-action tfcl-dashboard-action-edit"><i
                                                                            class="fa-solid fa-eye"></i></a>
                                                                    {{-- <a href="{{ route('seller.edit', [$seller->id])}}"
                                                                        class="btn-action tfcl-dashboard-action-edit text-capitalize"><i
                                                                            class="fa-solid {{ $seller->status_id == 1 ? 'fa-circle-check' : 'fa-circle-xmark' }} text-{{ $seller->status_id == 1 ? 'success' : 'danger' }}"></i></a> --}}
                                                                    <form
                                                                        action="{{ route('seller.destroy', $seller->id) }}"
                                                                        method="POST" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn-action tfcl-dashboard-action-edit"
                                                                            onclick="return confirm('Are you sure you want to delete this seller request?');"
                                                                            style="background:none;border:none;padding:0;"><i
                                                                                class="fa-solid fa-trash-can"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @empty

                                                            <tr>
                                                                <td colspan="5" class="text-center">
                                                                    No sellers found.
                                                                </td>
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
