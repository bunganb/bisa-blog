@extends('layouts.blogApp')
@section('content')
    <section class="section py-10">
        <div class="container">
            <div class="flex">
                <div class="flex lg:w-9/12">
                    <div>
                        <h4
                            class="mb-10 bg-gradient-to-l from-pink-400 to-blue-600 bg-clip-text text-4xl font-semibold leading-[50px] tracking-wide text-transparent underline decoration-blue-400 underline-offset-4">
                            Articels
                        </h4>

                        <h4 class="text-base font-light text-gray-400"> <span class="text-lg font-bold">BisaBlog</span> adalah
                            sumber artikel
                            berkualitas tentang
                            beragam topik. Dari ilmu pengetahuan hingga gaya hidup, kami berkomitmen memberikan wawasan yang
                            berharga. Temukan informasi yang Anda butuhkan dan jelajahi dunia melalui tulisan-tulisan kami.
                            Baca, pelajari, dan temukan hal-hal baru di <span class="text-lg font-bold">BisaBlog</span>!</h4>
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
                                    <a href="{{ route('detail-blog', ['slug' => $post->slug]) }}"><img alt=""
                                            class="rounded" src="{{ asset('storage/' . $post->image) }}"
                                            style="width: 100%; max-height: 400px; object-fit:cover"></a>
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
                            <div class="no-data text-center">
                                <img alt="" src="{{ asset('assets/images/notfound.png') }}">
                                <h3>No Data</h3>
                            </div>
                        @endforelse
                    </div>
                    <!-- Pagination-->
                    {{ $posts->links() }}
                    <!-- Pagination end-->
                </div>
                <div class="ml-0 mt-8 lg:ml-8">
                    <!-- Search widget-->
                    <form action="{{ route('list-blog') }}" method="GET">
                        <div class="mb-10 flex items-center border bg-transparent pr-4">
                            <!-- search input -->
                            <input class="w-full border-0 bg-transparent text-black focus:border-0 focus:ring-0"
                                name="search" placeholder="Search" type="search" value="{{ request('search') }}">
                            <button class="text-xl text-black" type="submit">
                                <span class="icofont-search-1"></span>
                            </button>
                        </div>
                    </form>
                    @if ($search)
                        <p>Hasil Pencarian untuk "{{ $search }}"</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
