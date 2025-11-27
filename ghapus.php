<?php

include("koneksi.php");
$hapus = mysqli_query($db, "DELETE FROM tamu WHERE id='$_GET[id]'");
if ($hapus) {
    header("location:list.php");
} else {
    echo "Gagal menghapus data";
}
