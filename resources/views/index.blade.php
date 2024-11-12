@extends('template.app')
@section('content')
    <h2 class="text-center mt-3">All Post</h2>
    <hr>
    <div class="row">
        @foreach ($posts as $item)
            <div class="col-md-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="card-img-top" style="height: 200px">
                        <a href="{{ route('post', $item->id) }}" class="h3 card-title my-2">{{ $item->title }}</a>
                        <h5>author : {{ $item->user->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
