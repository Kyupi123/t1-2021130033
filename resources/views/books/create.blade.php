@extends('layouts.template')

@section('title', 'Add New Books')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Books</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="isbn" class="form-label">ISBN (ISBN:13)</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="halaman" class="form-label">Jumlah Halaman</label>
                    <input type="number" class="form-control" id="halaman" name="halaman" value="{{ old('halaman') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select id="kategori" name="kategori" class="form-select">
                        <option value="uncategorized">Uncategorized</option>
                        <option value="sci-fi">Science Fiction</option>
                        <option value="novel">Novel</option>
                        <option value="history">History</option>
                        <option value="biography">Biography</option>
                        <option value="romance">Romance</option>
                        <option value="education">Education</option>
                        <option value="culinary">Culinary</option>
                        <option value="comic">Comic</option>
                      </select>
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
