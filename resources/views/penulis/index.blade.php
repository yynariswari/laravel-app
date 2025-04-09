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
<h3>Penulis List</h3>
<a href="penulis/create">Add New Penulis</a>
</div>
<div class="container-fluid" style="margin-top: 20px">
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Action</th>
        </tr>
        @foreach ($penuliss as $penulis)
        <tr>
            <td>{{ $penulis->nama }}</td>
            <td>{{ $penulis->email }}</td>
            <td>{{ $penulis->nomor_hp }}</td>
            <td>
                <div class="btn-action">
                    <a class="btn btn-success" href="/penulis/{{ $penulis->id }}/edit">Edit</a>
                    <form method="POST" action="penulis/{{ $penulis->id }}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
  </div>
@endsection