@if ($paginator->hasPages())
    <div class="mt-6 flex">
        @if ($paginator->onFirstPage())
            <a @disabled(true)
                class="items-centzer mx-1 flex cursor-not-allowed justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                href="#">
                <i class="icofont-rounded-left"></i>
            </a>
        @else
            <a class="items-centzer mx-1 flex cursor-not-allowed justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                href="{{ $paginator->previousPageUrl() }}">
                <i class="icofont-rounded-left"></i>
            </a>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span aria-disabled="true">
                    <span
                        class="relative -ml-px inline-flex cursor-default items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700">{{ $element }}</span>
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span
                                class="relative -ml-px inline-flex cursor-default items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-500">{{ $page }}</span>
                        </span>
                    @else
                        <a class="mx-1 hidden transform rounded border bg-gray-600 px-4 py-2 text-white transition-colors duration-200 sm:inline"
                            href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a class="mx-1 flex transform items-center justify-center rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white"
                href="#">
                <i class="icofont-rounded-right"></i>
            </a>
        @else
            <a @disabled(true)
                class="items-centzer mx-1 flex cursor-not-allowed justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                href="#">
                <i class="icofont-rounded-left"></i>
            </a>
        @endif
    </div>
@endif
{{-- askjadsh --}}
@if ($paginator->hasPages())
    <nav aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between" role="navigation">
        <div class="sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <span class="relative z-0 inline-flex rounded-md shadow-sm">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span aria-hidden="true"
                                class="relative inline-flex cursor-default items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500">
                                <i class="icofont-rounded-left"></i>
                            </span>
                        </span>
                    @else
                        <a aria-label="{{ __('pagination.previous') }}"
                            class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-400 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-gray-100 active:text-gray-500"
                            href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            <i class="icofont-rounded-left"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative -ml-px inline-flex cursor-default items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative -ml-px inline-flex cursor-default items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-500">{{ $page }}</span>
                                    </span>
                                @else
                                    <a aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                        class="relative -ml-px inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-gray-100 active:text-gray-700"
                                        href="{{ $url }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a aria-label="{{ __('pagination.next') }}"
                            class="relative -ml-px inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-400 focus:z-10 focus:border-blue-300 focus:outline-none focus:ring active:bg-gray-100 active:text-gray-500"
                            href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span aria-hidden="true"
                                class="relative -ml-px inline-flex cursor-default items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500">
                                <i class="icofont-rounded-right"></i>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
