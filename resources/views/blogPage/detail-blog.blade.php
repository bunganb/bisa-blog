@extends('layouts.blogApp')
@section('content')
    <!-- Section Start -->
    <section class="section py-14" id="home">
        <div class="container">
            <div class="back text-lg text-bold">
                <button onclick="history.back()">
                    <i class="icofont-rounded-left"></i>
                    back
                </button>
            </div>
            <div class="justify-center lg:flex">
                <div class="mx-2 lg:w-2/3">
                    <div class="text-center">
                        <h1
                            class="mb-10 bg-gradient-to-l from-pink-400 to-blue-600 bg-clip-text text-4xl font-semibold leading-[50px] tracking-wide text-transparent">
                            {{ $post->title }}
                        </h1>
                        <p class="text-base text-gray-400">Let our articles be your guides in the realm of knowledge. Embark
                            on a journey through thought-provoking content that fuels curiosity and fosters learning.</p>
                        <h4 class="mt-8 text-black"> A digital studio crafting <span
                                class="border-b-[3px] border-black">beautiful</span> experiences.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End -->
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="flex justify-center">
                <div class="w-full">
                    <img alt="tumbnail" class="rounded border bg-gray-50 p-1" style="width: 100%; height: 500px; object-fit:cover;"
                        src="{{ asset('storage/' . $post->image) }}">
                </div>
                <!--end /div-->
            </div>
            <!--end /div-->
        </div>
    </section>


    <section class="section py-10">
        <div class="container">
            <div class="flex justify-center">
                <div class="lg:w-2/3">
                    <div class="mt-14 block justify-center">
                        <p>{!! $post->content !!}</p>
                        {{-- <h4 class="text-base font-light italic"> "It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point of using
                            Lorem Ipsum is that it has a more-or-less."</h4> --}}
                        <img alt="testimonials-user" class="mx-auto mb-2.5 mt-4 h-16 w-16 rounded-full"
                            src="{{ asset('assets/images/user-1.png') }}">
                        <p class="text-center">{{ $post->user->name }} - Author</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
