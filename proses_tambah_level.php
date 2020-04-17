<?php

include 'db.php';

$level = $_POST['level'];

$db = new Database();
$insert = $db->insert('level', [
    'id_level' => '',
    'level' => $level
    ]);

if( $insert > 0 ){
    header('location: level.php');

}else{
    echo "Gagal menambahkan data..".mysqli_error($db->connect());
}
