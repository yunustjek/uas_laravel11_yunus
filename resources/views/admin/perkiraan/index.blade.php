
@extends('layout.main')
@section('content')
<h1>Master Perkiaan</h1>
<a class="btn btn-success btn-sm" href="{{ route('perkiraan.create') }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
<thead>
    <tr>
        <td>No</td>
        <td>Nomor Perkiaan</td>
        <td>Nama Perkiraan</td>
        <td>Kelompok</td>
        <td>Aksi</td>
    </tr>
    </thead>

    <tbody>
    @foreach($perkiraan as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->PerkiraanID }}</td>
    <td>{{ $item->NamaPerkiraan  }}</td>
    <td>{{ $item->Tipe }} </td>
    <td>

    <button onclick="window.location='{{ route('perkiraan.edit', $item->PerkiraanID) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              

    <form onsubmit="return deleteData('{{ $item->PerkiraanID }}')" style="display: inline" method="POST"  action="{{ route('perkiraan.destroy', $item->PerkiraanID) }}">
                @csrf
                @method('DELETE')
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
    </td>
</tr>
    @endforeach
    </tbody>
</table>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>

@endsection