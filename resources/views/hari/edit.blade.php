<h1>Edit Data</h1>
<form action="{{ route('hari.update', $hari->HariID) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari" value="{{ $hari->NamaHari }}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>