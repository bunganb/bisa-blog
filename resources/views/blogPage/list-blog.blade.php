@extends('layouts.blogApp')
@section('content')
    <section class="section py-10">
        <div class="container">
            <div class="flex">
                <div class="flex lg:w-9/12">
                    <div>
                        <h4
                            class="mb-10 bg-gradient-to-l from-pink-400 to-blue-600 bg-clip-text text-4xl font-semibold leading-[50px] tracking-wide text-transparent underline decoration-blue-400 underline-offset-4">
                            Tips and Tricks
                        </h4>

                        <h4 class="text-base font-light text-gray-400">Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec
                            sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin,
                            adipisicing elit sed lorem
                            quis bibendum auctor.</h4>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-3">
                <div class="col-span-2">
                    <div class="prose max-w-full">
                        @forelse ($posts as $post)
                            <!-- Post-->
                            <article>
                                <div>
                                    <a href="#"><img alt="" class="rounded"
                                            src="assets/images/blog/blog-1.jpg"></a>
                                </div>
                                <div>
                                    <h2><a
                                            href="{{ route('detail-blog', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <div class="flex space-x-6">
                                        <div><i class="icofont-ui-calendar"></i>{{ $post->created_at->format('M d, Y') }}
                                        </div>
                                        <div><i class="icofont-user-alt-5"></i> {{ $post->user->name }}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>{!! Str::limit(strip_tags($post->content), $limit = 200, $end = '...') !!}</p>
                                </div>
                                <a href="{{ route('detail-blog', ['slug' => $post->slug]) }}">Read More <i
                                        class="mdi mdi-arrow-right"></i></a>
                            </article>
                            <!-- Post end-->
                        @empty
                        @endforelse
                    </div>
                    <!-- Pagination-->
                    <div class="mt-6 flex">
                        <a class="items-centzer mx-1 flex cursor-not-allowed justify-center rounded border bg-white px-4 py-2 capitalize text-gray-500"
                            href="#">
                            <i class="icofont-rounded-left"></i>
                        </a>

                        <a class="mx-1 hidden transform rounded border bg-gray-600 px-4 py-2 text-white transition-colors duration-200 sm:inline"
                            href="#">
                            1
                        </a>

                        <a class="mx-1 hidden transform rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white sm:inline"
                            href="#">
                            2
                        </a>

                        <a class="mx-1 hidden transform rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white sm:inline"
                            href="#">
                            3
                        </a>

                        <a class="mx-1 hidden transform rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white sm:inline"
                            href="#">
                            4
                        </a>

                        <a class="mx-1 hidden transform rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white sm:inline"
                            href="#">
                            5
                        </a>

                        <a class="mx-1 flex transform items-center justify-center rounded border bg-white px-4 py-2 text-gray-700 transition-colors duration-200 hover:bg-gray-600 hover:text-white"
                            href="#">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                    <!-- Pagination end-->

                </div>

                <div class="ml-0 mt-8 lg:ml-8">
                    <!-- Search widget-->
                    <form action="{{ route('list-blog') }}" method="GET">
                        <div class="mb-10 flex items-center border bg-transparent pr-4">
                            <!-- search input -->
                            <input class="w-full border-0 bg-transparent text-black focus:border-0 focus:ring-0"
                                name="search" placeholder="Search" type="search" value="{{ old('search') }}">
                            <button class="text-xl text-black" type="submit">
                                <span class="icofont-search-1"></span>
                            </button>
                        </div>
                    </form>

                    <!-- Categories widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Categories</div>
                        <div class="relative my-5 flex items-center">
                            <div class="absolute h-px w-full rounded-l-full bg-gray-200"></div>
                            <div class="absolute h-px w-8 rounded-full bg-blue-700"></div>
                        </div>
                        <div class="space-y-5">
                            <div><a href="#">Journey</a> (40)</div>
                            <div><a href="#">Photography</a> (08)</div>
                            <div><a href="#">Lifestyle</a> (11)</div>
                            <div><a href="#">Food &amp; Drinks</a> (21)</div>
                        </div>
                    </aside>

                    <!-- Recent entries widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Popular Posts</div>
                        <div class="relative my-5 flex items-center">
                            <div class="absolute h-px w-full rounded-l-full bg-gray-200"></div>
                            <div class="absolute h-px w-8 rounded-full bg-blue-700"></div>
                        </div>
                        <div>
                            <div class="mb-4 flex border-b pb-4">
                                <div class="w-16">
                                    <a href="#"><img alt="" src="assets/images/works/img10.jpg"></a>
                                </div>
                                <div class="ml-4 mt-0.5">
                                    <a href="#">Beautiful Day With Friends..</a>
                                    <span>Feb 15, 2020</span>
                                </div>
                            </div>

                            <div class="mb-4 flex border-b pb-4">
                                <div class="w-16">
                                    <a href="#"><img alt="" src="assets/images/works/img2.jpg"></a>
                                </div>
                                <div class="ml-4 mt-0.5">
                                    <a href="#">Nature valley with cooling..</a>
                                    <span>Feb 10, 2020</span>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="w-16">
                                    <a href="#"><img alt="" src="assets/images/works/img3.jpg"></a>
                                </div>
                                <div class="ml-4 mt-0.5">
                                    <a href="#">15 Best Healthy and Easy Salad..</a>
                                    <span>Feb 8, 2020</span>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- Text widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Text Widget</div>
                        <div class="relative my-5 flex items-center">
                            <div class="absolute h-px w-full rounded-l-full bg-gray-200"></div>
                            <div class="absolute h-px w-8 rounded-full bg-blue-700"></div>
                        </div>

                        <p class="text-muted text-widget-des">Exercitation photo booth stumptown tote bag Banksy,
                            elit small
                            batch
                            freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                            proident chillwave
                            deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade
                            swag. </p>

                    </aside>

                    <!-- Archives widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Archives</div>
                        <div class="relative my-5 flex items-center">
                            <div class="absolute h-px w-full rounded-l-full bg-gray-200"></div>
                            <div class="absolute h-px w-8 rounded-full bg-blue-700"></div>
                        </div>

                        <div class="space-y-5">
                            <div><a href="#">March 2020</a> (40)</div>
                            <div><a href="#">April 2020</a> (08)</div>
                            <div><a href="#">May 2020</a> (11)</div>
                            <div><a href="#">Feb 2020</a> (21)</div>
                        </div>

                    </aside>

                    <!-- Tags widget-->
                    <aside class="mb-10">
                        <div class="text-base font-medium">Tags</div>
                        <div class="relative my-5 flex items-center">
                            <div class="absolute h-px w-full rounded-l-full bg-gray-200"></div>
                            <div class="absolute h-px w-8 rounded-full bg-blue-700"></div>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">logo</a>
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">business</a>
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">corporate</a>
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">e-commerce</a>
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">agency</a>
                            <a class="rounded-sm bg-gray-100 px-2 py-1.5 text-[10px] uppercase hover:bg-blue-500 hover:text-white"
                                href="#">responsive</a>
                        </div>
                    </aside>
                </div>
            </div>



        </div>
    </section>
@endsection
