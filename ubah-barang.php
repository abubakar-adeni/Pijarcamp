<?php 
include 'layout/header.php'; 
$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM produk WHERE id_barang = $id_barang")[0];

//cek apakah tombol tambah ditekan
if (isset($_POST['ubah'])) {
  if (update_barang($_POST) > 0) {
      echo "<script>alert('Data Barang Berhasil diubah');
      document.location.href = 'index.php';
      </script>";
  } else{
    echo "<script>alert('Data Barang Gagal diubah');
      document.location.href = 'index.php';
      </script>";
  }
}
?>

<div class="container mt-5">
    <h1>Ubah Barang</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>"/>
        <div class="mb-3">
            <label for="nama" class="form-label">Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $produk['nama'];?>" placeholder="Nama Barang.." required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $produk['harga'];?>" placeholder="harga" required>
        </div>


        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $produk['jumlah'];?>" placeholder="Jumlah" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $produk['keterangan'];?>" placeholder="Keterangan" required>
        </div>


        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>
</div>
?>

<?php include 'layout/footer.php'; ?>