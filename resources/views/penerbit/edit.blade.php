@extends('layout.main2')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('penerbit.update', $penerbit->id_penerbit) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Penerbit</td><td><input type="text" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}"></td>
        </tr>

        <tr>
            <td>Kota</td><td><input type="text" name="kota" value="{{ $penerbit->kota }}"></td>
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