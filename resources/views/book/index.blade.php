@extends('layout')
@section('content')

<style>
    th {
          text-align: center
      }

    .btn-action {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .btn-action form {
        margin: 0;
    }
</style>
<div class="container-fluid" style="margin-top: 20px">
<h3>Book List</h3>
<a href="/book/create">Add New Book</a>
  </div>
<div class="container-fluid" style="margin-top: 20px">
  <table class="table table-bordered">
    <tr>
      <th>Nomor</th>
      <th>ISBN</th>
      <th>Judul</th>
      <th>Gambar</th>
      <th>Harga</th>
      <th>Action</th>
    </tr>
    @foreach ($books as $book)
    <tr>
      <td style="text-align: center">{{ $loop->iteration}}</td>
      <td>{{ $book->isbn}}</td>
      <td><a href="{{ url('book/title/' . $book->id) }}">{{ $book->title }}</a>
      </td>
      <td>
        <img src="{{ $book->images }}" alt="Book Image" width="100">
      </td>
      <td>{{ $book->price}}</td>
      <td>
        <div class="btn-action">
          <a class="btn btn-success" href="/book/{{$book->id}}/edit">Edit</a>
          <form method="post" action="/book/{{$book->id}}">
            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection