@extends('layouts.blogApp')
@section('content')
    <!-- shuffle portfolio -->
    <section class="section">
        <div class="container">
            <div class="flex justify-center">
                <div class="filters-group-wrap mb-3 w-full">
                    <div class="mb-5 flex justify-center">
                        <ul class="filter-options flex flex-wrap justify-center gap-4">
                            <li class="active" data-group="all"><a href="javascript:void(0)">All</a></li>
                            <li data-group="android"><a href="javascript:void(0)">Android</a></li>
                            <li data-group="mockup"><a href="javascript:void(0)">Mockup</a></li>
                            <li data-group="personal"><a href="javascript:void(0)">Web</a></li>
                            <li data-group="design"><a href="javascript:void(0)">Design</a></li>
                        </ul>
                    </div>
                </div>
                <!--end /div-->
            </div>
            <!--end /div-->

            <div class="justify-center md:flex" id="grid">
                <div class="picture-item p-3 md:w-1/3" data-groups='["mockup"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img1.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Media, Icons</p>
                                <h6 class="text-base font-medium text-black">Open Imagination</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["android"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img2.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations</p>
                                <h6 class="text-base font-medium text-black">Locked Steel Gate</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["mockup"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img3.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Graphics, UI Elements</p>
                                <h6 class="text-base font-medium text-black">Mac Sunglasses</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["android"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img4.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Icons, Illustrations</p>
                                <h6 class="text-base font-medium text-black">Morning Dew</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["android"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img5.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base font-medium text-black">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["personal"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img6.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base font-medium text-black">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["design"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img8.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base font-medium text-black">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["mockup"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img7.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base font-medium text-black">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="picture-item p-3 md:w-1/3" data-groups='["personal"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img9.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base font-medium text-black">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["personal"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img10.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Graphics</p>
                                <h6 class="text-base font-medium text-black">Sunset Bulb Glow</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["android"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img11.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">UI Elements, Media</p>
                                <h6 class="text-base font-medium text-black">Console Activity</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["mockup"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img12.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base font-medium text-black">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="picture-item p-3 md:w-1/3" data-groups='["design"]'>
                    <div class="group relative block overflow-hidden rounded transition-all duration-500">
                        <img alt="work-image" class="rounded transition-all duration-500 group-hover:scale-105"
                            src="assets/images/works/img13.jpg" />
                        <a class="absolute inset-3 flex cursor-pointer items-end rounded bg-white p-3 opacity-0 transition-all duration-500 group-hover:opacity-80"
                            href="javascript:void(0)">
                            <div>
                                <p class="text-sm text-gray-400">Illustrations, Graphics</p>
                                <h6 class="text-base font-medium text-black">Shake It!</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--end /div-->
            <div class="mt-8 flex justify-center">
                <a class="rounded bg-blue-500 px-7 py-4 text-sm font-medium text-white" href="work.html">More Works <i
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
                        <h4 class="my-3 text-base uppercase">Branding</h4>

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
