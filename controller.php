<?php

//funcsi menampilkan
function select($query){
    //panggil database
    global $db;

    $result = mysqli_query($db, $query);
    $rows =[];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi menambahkdan data barang
function create_barang($post)
{
    
    global $db; 

    $nama   = $post['nama'];
    $harga  = $post['harga'];
    $jumlah = $post['jumlah'];
    $keterangan = $post['keterangan'];

    //query tambah data 
    $query = "INSERT INTO produk VALUES(null, '$nama','$harga', '$jumlah', '$keterangan')";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

//fungsi ubah barang
function update_barang($post) {
    global $db;

    $id_barang = $post['id_barang'];
    $nama   = $post['nama'];
    $harga  = $post['harga'];
    $jumlah = $post['jumlah'];
    $keterangan = $post['keterangan'];

    //query ubah data 
    $query = "UPDATE produk SET nama = '$nama', harga = '$harga', jumlah = '$jumlah', keterangan = '$keterangan' WHERE id_barang = $id_barang";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
    
}


//fungsi hapus barang
function delete_barang($id_barang) {
   
    global $db;

    //query hapus data
    $query = "DELETE FROM produk WHERE id_barang = $id_barang";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}











