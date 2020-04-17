<?php

require 'db.php';

$id  =$_POST['id_barang'];

$nama_barang            = $_POST['nama_barang'];
$tanggal                = $_POST['tanggal'];
$harga_awal             = $_POST['harga_awal'];
$deskripsi_barang       = $_POST['deskripsi_barang'];

$db = new Database();

$update = $db->update('barang', [
    'nama_barang'              => $nama_barang,
    'tanggal'                  => $tanggal,
    'harga_awal'               => $harga_awal,
    'deskripsi_barang'         => $deskripsi_barang
], ['id_barang'  => $id]);

if ( $update > 0 ) {
    echo "Berhasil mengubah data!";
    header('location: barang.php');
} else {
    echo "Gagal mengubah data".mysqli_error($db->connect());
}

