@extends('layouts.template')

@section('title', $book->judul)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $book->judul }}</h1>
        <p class="blog-post-meta">{{ $book->updated_at }}</p>
        <p>Jumlah Halaman: {{ $book->halaman }}</p>
        <p>Kategori: {{ $book->kategori }}</p>
        <p>Penerbit: {{ $book->penerbit }}</p>
    </article>
@endsection
