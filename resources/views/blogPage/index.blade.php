@extends('layouts.blogApp')
@section('content')
    <!-- Section Start -->
    <section class="section py-14" id="home">
        <div class="container">
            <div class="justify-center lg:flex">
                <div class="mx-2 lg:w-2/3">
                    <div class="text-center">
                        <h1
                            class="mb-10 bg-gradient-to-l from-pink-400 to-blue-600 bg-clip-text text-4xl font-semibold leading-[50px] tracking-wide text-transparent">
                            Open the door to a world brimming with insights at BISABLOG.
                        </h1>
                        <p class="text-base text-gray-400">Let our articles be your guides in the realm of knowledge. Embark
                            on a journey through thought-provoking content that fuels curiosity and fosters learning.</p>
                        <h2 class="mt-8 text-black">Read Our<span class="border-b-[3px] border-black">Articels</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blog --}}
    <section class="section">
        <div class="container">
            <div class="grid gap-8 lg:grid-cols-3">
                @forelse ($posts as $post)
                    <div class="rounded border">
                        <div class="p-5">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                style="width: 100%; height: 200px; object-fit:cover">
                            <h4 class="my-3 text-base">{{ $post->title }}</h4>
                            <p class="text-muted mb-4">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                            <div class="flex justify-between">
                                <a class="flex items-center bg-white p-3 text-base hover:bg-slate-500"
                                    href="{{ route('detail-blog', ['slug' => $post->slug]) }}">
                                    Read More <i class="pe-7s-angle-right ml-1 text-xl"></i>
                                </a>
                                <div class="card bg-slate-500 p-5 hover:bg-slate-600 hover:p-5">
                                    <i class="icofont-user-alt-7"></i>
                                    {{ $post->user->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full rounded border">
                        No Post
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="mt-8 flex justify-center">
                <a class="rounded bg-blue-500 px-7 py-4 text-sm font-medium text-white" href="{{ route('list-blog') }}">Read
                    More
                    Articels <i class="mdi mdi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>
    <section class="section py-10">
        <div class="container">
            <div class="grid gap-8 text-center lg:grid-cols-3">
                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-leaf"></i>
                        </div>
                        <h4 class="my-3 text-base uppercase">Sumber Terpercaya</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-helm"></i>
                        </div>
                        <h4 class="my-3 text-base uppercase">Artikel Bermanfaat</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-airplay"></i>
                        </div>
                        <h4 class="my-3 text-base uppercase">Tips & Trick</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
