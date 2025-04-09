@extends('layout')
@section('content')

<div class="container-fluid" style="margin-top: 20px">
<h2>Form Edit Book</h2>
  </div>
  <div class="container-fluid" style="margin-top: 20px">
<form action="/book/{{$book->id}}" method="POST">
  <input type="hidden" name="_method" value="PUT">
  @csrf
  
<table>
  <tr>
    <td>ISBN</td>
    <td><input value="{{ $book->isbn}}" type="text" name="isbn" placeholder="ISBN"></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><input value="{{ $book->title}}" type="text" name="title" placeholder="title"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input value="{{ $book->price}}" type="text" name="price" placeholder="price"></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button class="btn btn-primary" type="submit">Update</button>
      <a href="/book">Back</a>
    </td>
  </tr>
</table>
 
</form>
</div>
@endsection