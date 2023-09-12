@if ($paginator->hasPages())
    <div class="mt-6 flex">
        @if ($paginator->onFirstPage())
            <a @disabled(true)
                class="items-centzer mx-1 flex cursor-not-allowed justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                href="#">
                <i class="icofont-rounded-left"></i>
            </a>
        @else
            <a @disabled(true)
                class="mx-1 flex items-center justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500 transition-colors duration-200 hover:bg-gray-600 hover:text-white"
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
                        {{-- <span aria-current="page">
                            <span
                                class="relative -ml-px inline-flex cursor-default items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-500">{{ $page }}</span>
                        </span> --}}
                        <a aria-current="page"
                            class="mx-1 hidden transform rounded border bg-gray-600 px-4 py-2 text-white transition-colors duration-200 sm:inline"
                            href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @else
                        <a class="mx-1 hidden transform rounded border px-4 py-2 text-black transition-colors duration-200 sm:inline"
                            href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a class="mx-1 flex transform items-center justify-center rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white"
                href="{{ $paginator->nextPageUrl() }}">
                <i class="icofont-rounded-right"></i>
            </a>
        @else
            <a @disabled(true)
                class="mx-1 flex cursor-not-allowed items-center justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                href="#">
                <i class="icofont-rounded-right"></i>
            </a>
        @endif
    </div>
@endif
