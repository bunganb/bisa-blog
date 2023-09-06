@extends('layouts.blogApp')
@section('content')
    <section class="section py-10">
        <div class="container">
            <div class="flex">
                <div class="flex w-full justify-center">
                    <div class="border-b-[3px] border-black text-4xl text-black">Meet the Writter</div>
                </div>
            </div>
            <div class="mt-14 grid gap-4 lg:grid-cols-3">
                @foreach ($users as $user)
                <div class="p-8 text-center shadow-md">
                    <img alt="" class="mb-4 rounded" src="{{ asset('assets/images/nophoto.png') }}">
                    <h4 class="mb-1 text-lg font-medium">{{ $user->name }}</h4>
                    <h6 class="text-xs text-gray-400">Writter</h6>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
