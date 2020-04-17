<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('masyarakat', ['id_user' => $id]);

if ( $delete > 0 ) {
    // Data berhasil dihapus
    header('location: masyarakat.php');
} else {
    echo mysqli_error($db->connect());
}
