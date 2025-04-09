@extends('layout')
@section('content')
<div class="container-fluid" style="margin-top: 20px">
<h2>Form Add New Book</h2>
</div>
<div class="container-fluid" style="margin-top: 20px">
<form action="/book" method="POST">
  @csrf
  
<table>
  <tr>
    <td>ISBN</td>
    <td><input type="text" name="isbn" placeholder="ISBN"></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><input type="text" name="title" placeholder="title"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" placeholder="price"></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button class="btn btn-primary" type="submit">Save</button>
      <a href="/book">Back</a>
    </td>
  </tr>
</table>
  
</form>
</div>
@endsection