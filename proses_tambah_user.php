<?php

include 'db.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp      = $_POST['telp'];


$db = new Database();
$insert = $db->insert('masyarakat', [
    'id_user' => '',
    'nama_lengkap' => $nama_lengkap,
    'username' => $username,
    'password' => $password,
    'telp' => $telp
    ]);

if( $insert > 0 ){
    header('location: masyarakat.php');

}else{
    echo "Gagal menambahkan data..".mysqli_error($db->connect());
}
