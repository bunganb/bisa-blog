@extends('layouts.app')
@section('css')
    <script src="https://cdn.tiny.cloud/1/q4zmc33kggos0wimsn8ka2r4x6rcbbwj3hznvp376aafo7wn/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="grid gap-5">
        {{-- <!-- Content -->
        <div class="lg:col-span-2 xl:col-span-3">
            <div class="card h-1/4">
                <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg">
            </div>
        </div> --}}
        <div class="lg:col-span-2 xl:col-span-3">
            <div class="card p-5">
                <form action="{{ $post->slug }}" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-5 xl:w-1/2">
                        <label class="label mb-2 block" for="title">Title</label>
                        <input class="form-control" id="title" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="mt-5 xl:w-1/2">
                        <label class="label mb-2 block" for="tumbnail">Tumbnail</label>
                        <label class="input-group font-normal">
                            <div
                                class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                                No file chosen</div>
                            <input class="hidden" name="newTumbnail" type="file">
                            <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                        </label>
                    </div>
                    <div class="mb-5">
                        <label class="label mb-2 block" for="editor">Content</label>
                        <textarea name="content">
                            {{ $post->content }}
                        </textarea>
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
