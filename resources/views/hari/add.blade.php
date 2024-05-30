<h1>Tambah Data</h1>
<form action="{{ route('hari.store') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>