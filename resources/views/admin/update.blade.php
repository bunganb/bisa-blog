@extends('layouts.app')
@section('css')
    <script src="https://cdn.tiny.cloud/1/q4zmc33kggos0wimsn8ka2r4x6rcbbwj3hznvp376aafo7wn/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="grid gap-5">
        <!-- Content -->
        <div class="lg:col-span-2 xl:col-span-3">
            <div class="card p-5">
                <form action="{{ $post->slug }} " enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-5 xl:w-1/2">
                        <label class="label mb-2 block" for="title">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            value="{{ $post->title }}">
                        @error('title')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5 xl:w-1/2">
                        <label class="label mb-2 block" for="tumbnail">Tumbnail</label>
                        <img class="max-h-full max-w-full rounded-lg" src="{{ asset('storage/' . $post->image) }}">
                        <label class="input-group mt-5 font-normal">
                            <div
                                class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                                No file chosen</div>
                            <input class="@error('tumbnail') is-invalid @enderror hidden" name="newTumbnail" type="file">
                            <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                            @error('tumbnail')
                                <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                    <div class="mb-5">
                        <label class="label mb-2 block" for="editor">Content</label>
                        <textarea class="@error('tumbnail') is-invalid @enderror" name="content">
                            {{ $post->content }}
                        </textarea>
                        @error('content')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <button class="btn btn_primary uppercase" type="submit">click</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection
