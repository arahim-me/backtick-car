@extends('layouts.dashboardmaster')
@section('page-title', $title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-area">
                <main id="main" class="main-content">
                    <div class="tfcl-dashboard">
                        <h1 class="admin-title mb-3">All review</h1>
                        <div class="tfcl-dashboard-middle-right">
                            <div class="tfcl-card tfcl-dashboard-reviews">
                                <div class="tfcl-table-listing">
                                    <div class="table-responsive">
                                        <span class="result-text mb-3"><b>{{ $reviews->count() }}</b> results
                                            found</span>
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th>Content</th>
                                                    <th>Status</th>
                                                    <th>Posting date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tfcl-table-content">
                                                @forelse ($reviews as $review)
                                                    <tr>
                                                        <td class="comment-by-user">
                                                            <div class="tfcl-listing-product">

                                                                <div class="tfcl-listing-summary">
                                                                    <div class="group-author">
                                                                        <img loading="lazy" class="avatar" width="56"
                                                                            height="56"
                                                                            src="{{ asset('uploads') }}/{{ $review->user_id ? 'profiles/' . $review->reviewer->image : 'default/profile.png' }}"
                                                                            alt="avatar">
                                                                        <div class="group-name">
                                                                            <div class="review-name">
                                                                                <b>{{ $review->user_id ? $review->reviewer->name : $review->name }}</b>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <h4 class="tfcl-listing-title">
                                                                        <a target="_blank"
                                                                            href="#">{{ $review->title }}</a>
                                                                    </h4> --}}
                                                                    <div class="features-text">
                                                                        {{ $review->text }}
                                                                    </div>
                                                                    {{-- <div class="price">
                                                                        <div class="inner tfcl-listing-price">
                                                                            {{ __('button.currency_icon') }}{{ $list->price }}
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="rating-wrap">
                                                                        <div class="form-group">
                                                                            <div class="star-rating-review">
                                                                                <i class="star disabled-click icon-autodeal-star  {{ $review->rating >= 1 ? 'active' : '' }}"
                                                                                    data-rating="1"></i>
                                                                                <i class="star disabled-click icon-autodeal-star  {{ $review->rating >= 2 ? 'active' : '' }}"
                                                                                    data-rating="2"></i>
                                                                                <i class="star disabled-click icon-autodeal-star  {{ $review->rating >= 3 ? 'active' : '' }}"
                                                                                    data-rating="3"></i>
                                                                                <i class="star disabled-click icon-autodeal-star  {{ $review->rating >= 4 ? 'active' : '' }}"
                                                                                    data-rating="4"></i>
                                                                                <i class="star disabled-click icon-autodeal-star  {{ $review->rating == 5 ? 'active' : '' }}"
                                                                                    data-rating="5"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="column-status">
                                                            <span class="tfcl-listing-status status-publish text-capitalize">{{ $review->status }}</span>
                                                        </td>
                                                        <td class="column-date">
                                                            <div class="tfcl-listing-date">
                                                                {{ $review->created_at->diffForHumans() }}</div>
                                                        </td>
                                                        <td class="column-controller">
                                                            <div class="inner-controller">
                                                                <span class="icon">
                                                                    <i class="far {{ $review->testimonial == 'y'? 'fa-eye-slash': 'fa-eye' }}"></i>
                                                                </span>
                                                                <a href="{{ route('review.testimonial.update', $review->id) }}"
                                                                    class="btn-action tfcl-dashboard-action-edit">{{ $review->testimonial == 'y'? 'Hide Testimonial': 'Show Testimonial' }}</a>
                                                            </div>
                                                            <div class="inner-controller">
                                                                <span class="icon">
                                                                    <img src="{{ asset('resources') }}/assets/images/dashboard/hide.svg"
                                                                        alt="icon">
                                                                </span>
                                                                <a href="{{ route('review.status.update', $review->id) }}"
                                                                    class="btn-action tfcl-dashboard-action-edit">{{ $review->status == 'active' ? __('button.deactive') : __('button.active') }}</a>
                                                            </div>
                                                            <div class="inner-controller">
                                                                <span class="icon">
                                                                    <i class="fas fa-trash-arrow-up"></i>
                                                                </span>
                                                                <a href="{{ route('review.destroy', $review->id) }}"
                                                                    class="btn-action tfcl-dashboard-action-edit">{{ __('button.trash') }}</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <h2>No reviews yet</h2>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tfcl-pagination">
                                        {{ $reviews->links() }}
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
