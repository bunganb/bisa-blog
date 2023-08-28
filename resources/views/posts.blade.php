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
    <!-- List -->
    <div class="card p-5">
        <div class="overflow-x-auto">
            <table class="table_hoverable table w-full table-auto">
                <thead>
                    <tr>
                        <th class="w-px">
                            <label class="custom-checkbox">
                                <input checked partial type="checkbox">
                                <span></span>
                            </label>
                        </th>
                        <th class="uppercase ltr:text-left rtl:text-right">Title</th>
                        <th class="text-center uppercase">Author</th>
                        <th class="text-center uppercase">Date</th>
                        <th class="text-center uppercase">Pulbished</th>
                        <th class="text-center uppercase">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td style="width: 100px;">
                                <img src="{{ asset('storage/' . $post->image) }}" style="border-radius:10px;">
                            </td>
                            <td>{{ Str::limit($post->title, $limit = 20, $end = '...') }} </td>
                            <td class="text-center">{{ $post->user->name }}</td>
                            <td class="text-center">{{ $post->created_at->toDateString() }}</td>
                            <td class="text-center">
                                <div class="badge badge_outlined badge_secondary uppercase">Draft</div>
                            </td>
                            <td class="text-center">
                                <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                    <a class="btn btn-icon btn_outlined btn_secondary" href="#no-link">
                                        <span class="la la-pen-fancy"></span>
                                    </a>
                                    <a class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2" href="#no-link">
                                        <span class="la la-trash-alt"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th class="text-center uppercase" colspan="5">No Data</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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
@endsection
