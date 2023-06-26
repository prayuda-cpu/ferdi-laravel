<a href="/warga/create">Tambah Warga</a>
<table border="1">
    <tr>
        
        <th>Nama</th>
        <th>NIK</th>
        <th>No KK</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($warga as $w )
        
    
    <tr>
      
        <td>{{ $w->nama }}</td>
        <td>{{ $w->nik }}</td>
        <td>{{ $w->no_kk }}</td>
        <td>{{ $w->alamat }}</td>
        <td>
            <a href="/warga/{{$w->id}}/edit">Edit</a>
            <form action="/warga/{{ $w->id }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Hapus">

            </form>
        </td>
    </tr>
    @endforeach
     

</table>