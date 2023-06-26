<h1>Edit Data Warga</h1>

<form action='/warga/{{ $warga->id }}' method='POST'>
    @method('put')
    @csrf
    <table border='0' >
    <tr>
    <td>Nama</td><td><input type='text' name='nama' value='{{ $warga->nama }}'></td>
    </tr>
    <tr>
    <td>NIK</td><td><input type='text' name='nik' value='{{ $warga->nik }}'></td>
    </tr>
    <tr>
    <td>No KK</td><td><input type='text' name='no_kk' value='{{ $warga->no_kk }}'></td>
    </tr>
    <tr>
    <td>Alamat</td><td><input type='text' name='alamat' value='{{ $warga->alamat }}'></td>
    </tr>
    
    <tr>
    <td><input type='submit' name='simpan' value='save'></td>
    </tr>
    </table>
    </form>