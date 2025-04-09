@extends('layout')
@section('content')
<div class="container-fluid" style="margin-top: 20px">
    <h1>{{ $book->title }}</h1>
    <p>
      <img src="{{ $book->images }}" alt="Book Image" width="150">
    </p>
    <p><strong>Deskripsi:</strong> {{ $book->desc }}</p>
    <p><a href="{{ url('/book') }}">Kembali ke daftar buku</a></p>
</div>
@endsection