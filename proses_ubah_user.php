<?php

require 'db.php';

$id  =$_POST['id'];

$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$telp         = $_POST['telp'];

$db = new Database();

$update = $db->update('masyarakat', [
    'nama_lengkap' => $nama_lengkap,
    'username'     => $username,
    'password'     => $password,
    'telp'         => $telp,
], ['id_user'   => $id] );

if ( $update > 0 ) {
    // Data berhasil dihapus
    header('location: masyarakat.php');
} else {
    echo mysqli_error($db->connect());
}

