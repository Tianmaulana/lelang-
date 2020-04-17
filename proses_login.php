<?php

include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username='$username' ");
$jumlah_record = mysqli_num_rows($query);

if($jumlah_record==1){

    $user=mysqli_fetch_array($query, MYSQLI_ASSOC);
    $password_user=$user['password'];
    
    if(password_verify($password, $password_user)){
        header('Location:index.php');
    } else {
        echo "Passwordnya Tidak Cocok!!!!";
    }

} else {
    echo "Akunnya Tidak Terdaftar!!!";
}