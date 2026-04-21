<h2>Data Buku</h2>

<a href="/buku/create">Tambah Buku</a>

<table border="1" cellpadding="10">
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

@foreach($bukus as $buku)
<tr>
    <td>{{ $buku->judul }}</td>
    <td>{{ $buku->penulis }}</td>
    <td>{{ $buku->penerbit }}</td>
    <td>{{ $buku->tahun }}</td>
    <td>
        <!-- EDIT -->
        <a href="/buku/{{ $buku->id }}/edit">Edit</a>

        <!-- HAPUS -->
        <form action="/buku/{{ $buku->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>