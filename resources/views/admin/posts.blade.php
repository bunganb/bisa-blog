@extends('layouts.app')
@section('class')
    lg:flex items-start
@endsection
@section('lssa')
    <div class="mt-5 flex flex-wrap items-center gap-2 ltr:ml-auto rtl:mr-auto lg:mt-0">
        <!-- Search -->
        <form action="{{ route('Posts') }}" class="flex flex-auto" method="GET">
            <label class="form-control-addon-within rounded-full">
                <input class="form-control border-none" name="search" placeholder="Search" value="{{ request('search') }}">
                <button
                    class="la la-search text-xl leading-none text-gray-300 ltr:mr-4 rtl:ml-4 dark:text-gray-700"></button>
            </label>
        </form>
        <div class="flex gap-x-2">
            <!-- Add New -->
            <a class="btn btn_primary uppercase" href="{{ route('store') }}"><i class="las la-plus"></i>&nbsp;Add New</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="flex flex-col gap-y-5">
        @forelse ($posts as $post)
            <div class="card card_row card_hoverable">
                <div>
                    <div class="image">
                        <div class="aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $post->image) }}">
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h5>{{ $post->title }}</h5>
                    <p>{!! Str::limit(strip_tags($post->content), $limit = 60, $end = '...') !!} </p>
                </div>
                <div class="body">
                    <h6 class="uppercase">Author</h6>
                    <p>{{ $post->user->name }}</p>
                    <h6 class="mt-4 uppercase lg:mt-auto">Date Created</h6>
                    <p>{{ $post->created_at->format('M d, Y') }}</p>
                </div>
                <div class="actions">
                    <div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
                        <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                            href="{{ route('detail-blog', ['slug' => $post->slug]) }}" target="_blank">
                            <span class="la la-eye"></span>
                        </a>
                    </div>
                    <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                        href="{{ route('Posts Edit', ['slug' => $post->slug]) }}">
                        <span class="la la-pen-fancy"></span>
                    </a>
                    <a class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2 lg:mt-2 lg:ltr:ml-0 lg:rtl:mr-0"
                        href="{{ route('delete', $post->slug) }}" id="btn-delete">
                        <span class="la la-trash-alt"></span>
                    </a>
                </div>
            </div>
        @empty
            <div class="card card_row card_hoverable flex items-center justify-center p-3 text-center">
                <h3 class="text-center">No Data</h3>
            </div>
        @endforelse
    </div>
    <div class="mt-5">
        <div class="card lg:flex">
            <nav class="flex flex-wrap gap-2 p-5">
                {{-- Previous Page Link --}}
                @if ($posts->onFirstPage())
                    <a class="btn btn_outlined btn_secondary disabled" href="#">Previous</a>
                @else
                    <a class="btn btn_primary" href="{{ $posts->previousPageUrl() }}">Previous</a>
                @endif
                {{-- Numeric Page Links --}}
                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                    <a class="btn {{ $posts->currentPage() == $page ? ' btn_primary' : ' btn_secondary btn_outlined' }}"
                        href="{{ $url }}">{{ $page }}</a>
                @endforeach
                {{-- Next Page Link --}}
                @if ($posts->hasMorePages())
                    <a class="btn btn_primary" href="{{ $posts->nextPageUrl() }}">Next</a>
                @else
                    <a class="btn btn_outlined btn_secondary disabled" href="#">Next</a>
                @endif
            </nav>
            <div class="border-divider flex items-center border-t p-5 ltr:ml-auto rtl:mr-auto lg:border-t-0">
                Displaying {{ $posts->firstItem() }}-{{ $posts->lastItem() }} of {{ $posts->total() }} items
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // delete confirm
        $(document).on('click', '#btn-delete', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Do You Want To delete This Data?',
                text: 'Confirm Delete data ',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            });
        });
    </script>
@endsection
