<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('barang', ['id_barang' => $id]);

if ( $delete > 0 ) {
    // Data berhasil dihapus
    header('location: barang.php');
} else {
    echo mysqli_error($db->connect());
}
