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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">

            <div class="mt-8 flex justify-center">
                <a class="rounded bg-blue-500 px-7 py-4 text-sm font-medium text-white" href="{{ route('list-blog') }}">Read Articels <i
                        class="mdi mdi-arrow-right ms-1"></i></a>
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
                        <h4 class="my-3 text-base uppercase">trusted source</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-helm"></i>
                        </div>
                        <h4 class="my-3 text-base uppercase">Highly customizable</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>

                <div>
                    <div class="p-5">
                        <div class="text-5xl text-blue-500">
                            <i class="pe-7s-airplay"></i>
                        </div>
                        <h4 class="my-3 text-base uppercase">Responsive design</h4>

                        <p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection