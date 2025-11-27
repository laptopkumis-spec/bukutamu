<?php

include("koneksi.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>
                alert('Terima kasih, data buku tamu berhasil disimpan!');
                window.location.href = 'list.php';
              </script>";
    } else {
        echo "<script>
                alert('Maaf, data gagal disimpan. Silakan coba lagi.');
                window.location.href = 'gbook.php';
              </script>";
    }
}

if(isset($_GET['aksi'])){
  $id = $_GET['id'];
  $query = $db->query("DELETE FROM TAMU WHERE ID = 'ID' ");
  
  if($query){
    header("Location : index.php");
  }else{
    echo("Gagal Mengahpus Data");
  }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "UPDATE tamu SET 
                nama='$nama',
                email='$email',
                komentar='$komentar'
            WHERE id='$id'";

    if (mysqli_query($db, $sql)) {
        header("Location: index.php?p=bukutamu");
        exit;
    } else {
        echo "Gagal update: " . mysqli_error($db);
    }
  }