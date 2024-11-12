@extends('template.app')
@section('content')
    <h2 class="text-center mt-3">{{ $post->title }}</h2>
    <hr>
    <div class="row">
        <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="card-img">
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Autor : {{ $post->user->name     }} | {{ $post->created_at->diffForHumans() }}</h6>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                </div>
            </div>
            <a href="/" class="btn btn-dark mt-3">kembali</a>
        </div>
    </div>
@endsection
