@extends('template.app')
@section('content')
    <h2 class="text-center mt-3">Form New Post</h2>
    <hr>
    <div class="d-flex justify-content-center align-items-center vh100">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="title" class="form-control" required autocomplete="off">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" id="image" class="form-control" required
                            autocomplete="off">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="" required></textarea>
                        <button type="submit" class="btn btn-dark mt-3">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
