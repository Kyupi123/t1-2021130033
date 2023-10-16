@extends('layouts.template')

@section('title', 'Books List')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All Books</h1>
    </div>

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <th >{{ $book->isbn }}</th>
                        <td>{{ Str::limit($book->judul, 10, ' ...') }}</td>
                        <td>{{ $book->halaman }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No books found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $books->links() !!}
        </div>
    </div>
@endsection
