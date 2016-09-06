<?php
if (isset($_POST['tambah'])) {
  $crud->tambah();
} ?>

<form method="post">
  Nama: <input type="text" name="nama" required=""><br><br>
  Harga: <input type="text" name="harga" required=""><br><br>
  Jumlah: <input type="text" name="jumlah" required=""><br><br>
  <input type="submit" name="tambah" value="simpan">
</form>
