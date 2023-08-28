@extends('layouts.app')
@section('content')
    <div class="grid gap-5 lg:grid-cols-2">
        <!-- Summaries -->
        <div class="grid gap-5 sm:grid-cols-3">
            <a href="/posts">
                <div
                    class="card flex items-center justify-center px-4 py-8 text-center transition-transform duration-200 hover:scale-110 hover:shadow-lg lg:transform">
                    <div>
                        <span class="text-primary la la-sun text-5xl leading-none"></span>
                        <p class="mt-2">Published Posts</p>
                        <div class="text-primary mt-5 text-3xl leading-none">{{ $posts }}</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    class="card flex items-center justify-center px-4 py-8 text-center transition-transform duration-200 hover:scale-110 hover:shadow-lg lg:transform">
                    <div>
                        <span class="text-primary la la-users text-5xl leading-none"></span>
                        <p class="mt-2">Authors</p>
                        <div class="text-primary mt-5 text-3xl leading-none">{{ $authors }}</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    class="card flex items-center justify-center px-4 py-8 text-center transition-transform duration-200 hover:scale-110 hover:shadow-lg lg:transform">
                    <div>
                        <span class="text-primary la la-layer-group text-5xl leading-none"></span>
                        <p class="mt-2">Categories</p>
                        <div class="text-primary mt-5 text-3xl leading-none">9</div>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
