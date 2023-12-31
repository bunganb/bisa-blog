@extends('layouts.app')
@section('css')
    <script src="https://cdn.tiny.cloud/1/q4zmc33kggos0wimsn8ka2r4x6rcbbwj3hznvp376aafo7wn/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="grid gap-5">
        <a class="back text-bold card label p-3 text-left text-lg" href="{{ route('Posts') }}" style="color: inherit">
            <i class="la la-angle-left"></i>
            back
        </a>
        <div class="lg:col-span-2 xl:col-span-3">
            <img alt="" class="rounded-lg shadow" src="{{ asset('assets/images/no-image.png') }}"
                style="width: 100%; max-height: 200px; object-fit:cover;object-position: 30% 70%;">
        </div>
        <div class="lg:col-span-2 xl:col-span-3">
            <div class="card p-5">
                <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-5 xl:w-1/2">
                        <label class="label mb-2 block" for="title">Title</label>
                        <input autofocus class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title') }}">
                        @error('title')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5 xl:w-1/2">
                        <label class="label mb-2 block" for="tumbnail">Tumbnail</label>
                        <label class="input-group font-normal">
                            <div
                                class="file-name input-addon input-addon-prepend input-group-item is-invalid w-full overflow-x-hidden">
                                No file chosen</div>
                            <input class="@error('tumbnail') is-invalid @enderror hidden" name="tumbnail" type="file" id="uploadImage">
                            <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                        </label>
                        @error('tumbnail')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="label mb-2 block" for="editor">Content</label>
                        <textarea class="@error('content') is-invalid @enderror" name="content">
                            {{ old('content') }}
                        </textarea>
                        @error('content')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <button class="btn btn_primary uppercase" type="submit">Publish</button>
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
        // image
        const image = document.querySelector('img');
        input = document.getElementById('uploadImage');
        input.addEventListener('change', function() {
            image.src = URL.createObjectURL(input.files[0]);
        });
    </script>

@endsection
