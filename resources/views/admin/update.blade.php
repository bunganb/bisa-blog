@extends('layouts.app')
@section('css')
    <script src="https://cdn.tiny.cloud/1/q4zmc33kggos0wimsn8ka2r4x6rcbbwj3hznvp376aafo7wn/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="grid gap-5">
        <!-- Content -->
        <div class="lg:col-span-2 xl:col-span-3">
                <img alt="" class="rounded-lg shadow" src="{{ asset('storage/' . $post->image) }}" style="width: 100%; max-height: 200px; object-fit:cover">
        </div>
        <div class="lg:col-span-2 xl:col-span-3">
            <div class="card p-5">
                <form action="" enctype="multipart/form-data" id="form-edit" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-5 xl:w-1/2">
                        <label class="label mb-2 block" for="title">Title</label>
                        <input autofocus class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ $post->title }}">
                        @error('title')
                            <small class="invalid-feedback mt-2 block">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5 xl:w-1/2">
                        <label class="label mb-2 block" for="tumbnail">Tumbnail</label>
                        <label class="input-group mt-5 font-normal">
                            <div
                                class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                                No file chosen</div>
                            <input class="@error('tumbnail') is-invalid @enderror hidden" name="newTumbnail" type="file" id="uploadImage">
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
                    <button class="btn btn_primary uppercase" id="btn-update" type="submit">click</button>
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
        // update confirm
        $(document).ready(function() {
            // Fungsi yang akan dijalankan saat tombol delete diklik
            $(document).on('click', '#btn-update', function(e) {
                e.preventDefault();
                // Mengambil link dari atribut action pada form
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    denyButtonText: `Don't save`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $('#form-edit').submit();
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info');
                    }
                });
            });
        });
        // image
        const image = document.querySelector('img');
        input =document.getElementById('uploadImage');
        input.addEventListener('change',function(){
            image.src = URL.createObjectURL(input.files[0]);
        });
    </script>
@endsection
