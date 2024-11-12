@extends('template.app')
@section('content')
    <h2 class="text-center mt-3">Hello {{ Auth::user()->name }}</h2>
    <hr>
    <a href="{{ route('admin.create') }}" class="btn btn-success">tambah</a>
    @if (Session::has('status'))
        <h1 class="text-success">{{ Session::get('status') }}</h1>
    @endif
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th>no</th>
                <th>gambar</th>
                <th>judul</th>
                <th>excerpt</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" width="100">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->body, 50, '...') }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-primary">edit</a>
                        <form action="{{ route('admin.destroy', $item->id) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
