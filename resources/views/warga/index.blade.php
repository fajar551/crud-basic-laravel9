<a href="/warga/create">Tambahkan Warga</a>



<table border="1">
  <tr>
    <th>Nama</th>
    <th>Nik</th>
    <th>No_KK</th>
    <th>Jenis_kelamin</th>
    <th>Alamat</th>
  </tr>
  @foreach ($warga as $x)
      <tr>
        <td>{{$x->nama}}</td>
        <td>{{$x->nik}}</td>
        <td>{{$x->no_kk}}</td>
        <td>{{$x->jenis_kelamin}}</td>
        <td>{{$x->alamat}}</td>
 
      </tr>
  @endforeach
</table>