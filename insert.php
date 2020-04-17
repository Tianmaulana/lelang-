<?php

include 'db.php';

$nama_lengkap = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$te       = $_POST['telp'];


$ikki = new Database();
$insert = $ikki->insert('masyarakat', [
    'id_user' => '',
    'nama_lengkap' => "$nama_lengkap",
    'username' => "$username",
    'password' => "$password",
    'telp' => "$telp"
    ]);

if( $insert > 0 ){
    header('location: masyarakat.php');

}else{
    echo "Gagal menambahkan data..".mysqli_error($ikki->connect());
}
