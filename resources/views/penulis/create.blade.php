@extends('layout')
@section('content')

<div class="container-fluid" style="margin-top: 20px">
<h2>Form Add New Penulis</h2>
  </div>
<form action="/penulis" method="POST">
  @csrf
  <div class="container-fluid" style="margin-top: 20px">
<table>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" placeholder="nama"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" placeholder="email"></td>
  </tr>
  <tr>
    <td>Nomor HP</td>
    <td><input type="text" name="nomor_hp" placeholder="nomor_hp"></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button class="btn btn-primary" type="submit">Save</button>
      <a href="/penulis">Back</a>
    </td>
  </tr>
</table>
  </div>
</form>
@endsection