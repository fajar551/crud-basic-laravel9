<h1>Tambahkan Warga</h1>


<form action="warga/store" method="post">
  @csrf
  <input type="text" name="nama" placeholder="Masukkan Nama"> <br>
  <input type="text" name="nik" placeholder="Masukkan NIK"> <br>
  <input type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin"> <br>
  <select name="jenis_kelamin" >
    <option value="">Jenis Kelamin</option>
    <option value="L">Laki - Laki</option>
    <option value="P">Perempuan</option>
  </select><br>
  <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
  <input type="submit" value="Save" name="submit"><br>
</form>