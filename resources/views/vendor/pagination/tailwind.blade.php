{{-- @if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="far fa-angle-left"></i></a>
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>


        </div>
        {{-- <a class="prev page-numbers" href="#"><i class="far fa-angle-left"></i></a>
        <a class="page-numbers" href="#">1</a>
        <a class="page-numbers" href="#">2</a>
        <a class="page-numbers current" href="#">3</a>
        <a class="page-numbers" href="#">4</a>
        <a class="page-numbers" href="#">...</a>
        <a class="next page-numbers" href="#"><i class="far fa-angle-right"></i></a> --}}
{{-- </nav>
@endif --}}



<div class="tfcl-pagination paging-navigation clearfix">

{{-- Pagination Elements --}}
@foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
        <span aria-disabled="true">
            <span
                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $element }}</span>
        </span>
    @endif
    {{-- Previous page url --}}
    @if ($paginator->onFirstPage())
        <span aria-disabled="true" hidden aria-label="{{ __('pagination.previous') }}">
            <span class="page-numbers" aria-hidden="true">
                <i class="far fa-angle-left"></i>
            </span>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="prev page-numbers"
            aria-label="{{ __('pagination.previous') }}">
            <i class="far fa-angle-left"></i>
        </a>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <span aria-current="page">
                    <span class="current">{{ $page }}</span>
                </span>
            @else
                <a href="{{ $url }}" class="page-numbers"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
            @endif
        @endforeach
    @endif
@endforeach

{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next page-numbers"
        aria-label="{{ __('pagination.next') }}">
        <i class="far fa-angle-right"></i>
    </a>
@else
    <span aria-disabled="true" hidden aria-label="{{ __('pagination.next') }}">
        <i class="far fa-angle-right"></i>
    </span>
@endif
</div>
