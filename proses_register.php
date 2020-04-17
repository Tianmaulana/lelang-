<?php

include "koneksi.php";

$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$password_dihash = password_hash($password, PASSWORD_DEFAULT);
$query=mysqli_query($koneksi, "INSERT INTO masyarakat VALUES('', '$nama', '$username', '$password_dihash', '$telp')");

if ($query){
    header('Location:login.php');
} else {
    echo "Registrasi gagal...".mysqli_error($koneksi);
}