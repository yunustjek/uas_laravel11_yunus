@extends('layout.main')
@section('content')

<h1>Master Hari</h1>
<a href="{{ route('hari.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
<table class="table bordered table-sm">
    <tr>
        <thead>
        <td>No</td>
        <td>Nama Hari</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
@foreach($hari as $item )
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->NamaHari }}</td>
        <td><a href="" class="btn btn-warning btn-sm">Edit</a></td>
    </tr>
@endforeach
</tbody>
</table>
@endsection