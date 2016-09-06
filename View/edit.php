<?php
if (isset($_POST['update'])) {
  $crud->update();
} ?>

<form method="post">
  <?php print_r($data); ?>
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required="">

  Nama: <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required=""><br><br>

  Harga: <input type="text" name="harga" value="<?php echo $data['harga'] ?>" required=""><br><br>

  Jumlah: <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>" required=""><br><br>

  <input type="submit" name="update" value="update">
</form>
