<?php include 'layout/header.php'; 
$data_produk = select("SELECT * FROM produk");
?>

<div class="container mt-5">
    <h1>Data Barang</h1>
    <hr>
    <a href="tambah-barang.php" class="btn btn-primary mb-1">Tambah</a>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_produk as $produk) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $produk['nama']; ?></td>
                <td>Rp. <?= number_format($produk['harga'],0,',','.'); ?></td>
                <td class="text-center"><?= $produk['jumlah']; ?></td>
                <td><?= $produk['keterangan']; ?></td>
                <td width="15%" class="text-center">
                    <a href="ubah-barang.php?id_barang=<?= $produk['id_barang'];?>" class="btn btn-success">Ubah</a>
                    <a href="hapus-barang.php?id_barang=<?= $produk['id_barang'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>


