@extends('layout')
@section('content')
<div class="container-fluid" style="margin-top: 20px">
<h2>Form Edit Writer</h2>
<form action="/penulis/{{$penulis->id}}" method="POST">
</div>  
  <input type="hidden" name="_method" value="PUT">
  @csrf
  <div class="container-fluid" style="margin-top: 20px">
<table>
  <tr>
    <td>Nama</td>
    <td><input value="{{ $penulis->nama}}" type="text" name="nama" placeholder="nama"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input value="{{ $penulis->email}}" type="text" name="email" placeholder="email"></td>
  </tr>
  <tr>
    <td>Nomor HP</td>
    <td><input value="{{ $penulis->nomor_hp}}" type="text" name="nomor_hp" placeholder="nomor_hp"></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <button class="btn btn-primary" type="submit">Update</button>
      <a href="/penulis">Back</a>
    </td>
  </tr>
</table>
  </div>
</form>
@endsection