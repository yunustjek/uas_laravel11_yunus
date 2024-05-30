<h1>Tambah Data</h1>
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
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>