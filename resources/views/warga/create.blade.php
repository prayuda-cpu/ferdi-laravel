<h1>Tambah Data Warga</h1>

<form action='/warga/store' method='POST'>
    @csrf
    <table border='0' >
    <tr>
    <td>Nama</td><td><input type='text' name='nama'></td>
    </tr>
    <tr>
    <td>NIK</td><td><input type='text' name='nik'></td>
    </tr>
    <tr>
    <td>No KK</td><td><input type='text' name='no_kk'></td>
    </tr>
    <tr>
    <td>Alamat</td><td><input type='text' name='alamat'></td>
    </tr>
    
    <tr>
    <td><input type='submit' name='simpan' value='save'></td>
    </tr>
    </table>
    </form>