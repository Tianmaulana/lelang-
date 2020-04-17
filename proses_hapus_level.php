<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('level', ['id_level' => $id]);

if ( $delete > 0 ) {
    // Data berhasil dihapus
    header('location: level.php');
} else {
    echo mysqli_error($db->connect());
}
