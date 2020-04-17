<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('history_lelang', ['id_history_lelang' => $id]);

if ( $delete > 0 ) {
    // Data berhasil dihapus
    header('location: history_lelang.php');
} else {
    echo mysqli_error($db->connect());
}
