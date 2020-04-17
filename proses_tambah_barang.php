<?php

include 'db.php';

$nama_barang = $_POST['nama_barang'];
$tanggal = $_POST['tanggal'];
$harga_awal = $_POST['harga_awal'];
$deskripsi_barang       = $_POST['deskripsi_barang'];


$ikki = new Database();
$insert = $ikki->insert('barang', [
    'id_barang' => '',
    'nama_barang' => "$nama_barang",
    'tanggal' => "$tanggal",
    'harga_awal' => "$harga_awal",
    'deskripsi_barang' => "$deskripsi_barang"
    ]);

if( $insert > 0 ){
    header('location: barang.php');

}else{
    echo "Gagal menambahkan data..".mysqli_error($ikki->connect());
}
