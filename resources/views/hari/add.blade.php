@extends('layout.main2')
@section('content')
<h3>Tambah Data</h3>
<form action="{{ route('hari.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari"></td>
        </tr>
        
        <tr>
            <td>Icon</td><td><input type="file" name="img"></td>
        </tr>               
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection