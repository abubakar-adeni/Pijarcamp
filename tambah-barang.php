<?php 
include 'layout/header.php'; 

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
  if (create_barang($_POST) > 0) {
      echo "<script>alert('Data Barang Berhasil ditambahkan');
      document.location.href = 'index.php';
      </script>";
  } else{
    echo "<script>alert('Data Barang Gagal ditambahkan');
      document.location.href = 'index.php';
      </script>";
  }
}
?>

<div class="container mt-5">
    <h1>Tambah Barang</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang.." required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="harga" required>
        </div>


        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
        </div>


        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
    </form>
</div>
?>

<?php include 'layout/footer.php'; ?>