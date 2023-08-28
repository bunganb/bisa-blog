@extends('layouts.app')
@section('class')
    lg:flex items-start
@endsection
@section('lssa')
    <div class="mt-5 flex flex-wrap items-center gap-2 ltr:ml-auto rtl:mr-auto lg:mt-0">
        <!-- Search -->
        <form class="flex flex-auto">
            <label class="form-control-addon-within rounded-full">
                <input class="form-control border-none" placeholder="Search">
                <button
                    class="la la-search text-xl leading-none text-gray-300 ltr:mr-4 rtl:ml-4 dark:text-gray-700"></button>
            </label>
        </form>

        <div class="flex gap-x-2">

            <!-- Sort By -->
            <div class="dropdown">
                <button class="btn btn_outlined btn_secondary uppercase" data-toggle="dropdown-menu">
                    Sort By
                    <span class="la la-caret-down text-xl leading-none ltr:ml-3 rtl:mr-3"></span>
                </button>
                <div class="dropdown-menu">
                    <a href="#no-link">Ascending</a>
                    <a href="#no-link">Descending</a>
                </div>
            </div>

            <!-- Add New -->
            <a class="btn btn_primary uppercase" href="posts/addPost"><i class="las la-plus"></i>&nbsp;Add New</a>
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
                        <label class="custom-checkbox absolute top-0 mt-2 ltr:left-0 ltr:ml-2 rtl:right-0 rtl:mr-2">
                            <input data-toggle="cardSelection" type="checkbox">
                            <span></span>
                        </label>
                        <div
                            class="badge badge_outlined badge_secondary absolute top-0 mt-2 uppercase ltr:right-0 ltr:mr-2 rtl:left-0 rtl:ml-2">
                            Draft
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h5>{{ $post->title }}</h5>
                    <p>{!! Str::limit(strip_tags($post->content), $limit = 100, $end = '...')!!} </p>
                </div>
                <div class="body">
                    <h6 class="uppercase">Author</h6>
                    <p>{{ $post->user->name }}</p>
                    <h6 class="mt-4 uppercase lg:mt-auto">Date Created</h6>
                    <p>{{ $post->created_at->format('M d, Y')}}</p>
                </div>
                <div class="actions">
                    <div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
                        <button data-toggle="dropdown-menu">
                            <span class="la la-ellipsis-v text-4xl leading-none"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#no-link">Dropdown Action</a>
                            <a href="#no-link">Link</a>
                            <hr>
                            <a href="#no-link">Something Else</a>
                        </div>
                    </div>
                    <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                        href="#no-link">
                        <span class="la la-pen-fancy"></span>
                    </a>
                    <a class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2 lg:mt-2 lg:ltr:ml-0 lg:rtl:mr-0"
                        href="#no-link">
                        <span class="la la-trash-alt"></span>
                    </a>
                </div>
            </div>
        @empty
        @endforelse

    </div>
    <div class="mt-5">
        <!-- Pagination -->
        <div class="card lg:flex">
            <nav class="flex flex-wrap gap-2 p-5">
                <a class="btn btn_primary" href="#no-link">First</a>
                <a class="btn btn_primary" href="#no-link">1</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">2</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">3</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">4</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">5</a>
                <a class="btn btn_secondary" href="#no-link">Last</a>
            </nav>
            <div class="border-divider flex items-center border-t p-5 ltr:ml-auto rtl:mr-auto lg:border-t-0">
                Displaying 1-5 of 100 items
            </div>
            <div class="border-divider flex items-center gap-2 border-t p-5 lg:border-t-0 lg:ltr:border-l lg:rtl:border-r">
                <span>Show</span>
                <div class="dropdown">
                    <button class="btn btn_outlined btn_secondary" data-toggle="dropdown-menu">
                        5
                        <span class="la la-caret-down text-xl leading-none ltr:ml-3 rtl:mr-3"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">5</a>
                        <a href="#no-link">10</a>
                        <a href="#no-link">15</a>
                    </div>
                </div>
                <span>items</span>
            </div>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-y-5">
        @forelse ($posts as $post)
            <div class="card card_row card_hoverable">
                <div>
                    <div class="image">
                        <div class="aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $post->image) }}">
                        </div>
                        <label class="custom-checkbox absolute top-0 mt-2 ltr:left-0 ltr:ml-2 rtl:right-0 rtl:mr-2">
                            <input data-toggle="cardSelection" type="checkbox">
                            <span></span>
                        </label>
                        <div
                            class="badge badge_outlined badge_secondary absolute top-0 mt-2 uppercase ltr:right-0 ltr:mr-2 rtl:left-0 rtl:ml-2">
                            Draft
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h5>{{ $post->title }}</h5>
                    <p>{!! Str::limit($post->content, $limit = 300, $end = '...') !!} </p>
                </div>
                <div class="body">
                    <h6 class="uppercase">Views</h6>
                    <p>100</p>
                    <h6 class="mt-4 uppercase lg:mt-auto">Date Created</h6>
                    <p>{{ $post->created_at->toDateString() }}</p>
                </div>
                <div class="actions">
                    <div class="dropdown">
                        <button data-toggle="dropdown-menu">
                            <span class="la la-ellipsis-v text-4xl leading-none"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#no-link">Dropdown Action</a>
                            <a href="#no-link">Link</a>
                            <hr>
                            <a href="#no-link">Something Else</a>
                        </div>
                    </div>
                    <a class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0"
                        href="#no-link">
                        <span class="la la-pen-fancy"></span>
                    </a>
                    <a class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2 lg:mt-2 lg:ltr:ml-0 lg:rtl:mr-0"
                        href="#no-link">
                        <span class="la la-trash-alt"></span>
                    </a>
                </div>
            </div>
        @empty
        <tr>
            <td>No Post</td>
        </tr>
        @endforelse
    </div> --}}
    {{-- <div class="mt-5">
        <!-- Pagination -->
        <div class="card lg:flex">
            <nav class="flex flex-wrap gap-2 p-5">
                <a class="btn btn_primary" href="#no-link">First</a>
                <a class="btn btn_primary" href="#no-link">1</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">2</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">3</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">4</a>
                <a class="btn btn_outlined btn_secondary" href="#no-link">5</a>
                <a class="btn btn_secondary" href="#no-link">Last</a>
            </nav>
            <div class="border-divider flex items-center border-t p-5 ltr:ml-auto rtl:mr-auto lg:border-t-0">
                Displaying 1-5 of 100 items
            </div>
            <div class="border-divider flex items-center gap-2 border-t p-5 lg:border-t-0 lg:ltr:border-l lg:rtl:border-r">
                <span>Show</span>
                <div class="dropdown">
                    <button class="btn btn_outlined btn_secondary" data-toggle="dropdown-menu">
                        5
                        <span class="la la-caret-down text-xl leading-none ltr:ml-3 rtl:mr-3"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">5</a>
                        <a href="#no-link">10</a>
                        <a href="#no-link">15</a>
                    </div>
                </div>
                <span>items</span>
            </div>
        </div>
    </div> --}}
@endsection
