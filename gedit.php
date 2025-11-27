<?php
include("koneksi.php");
$edit = mysqli_query($db, "SELECT * FROM tamu WHERE id='$_GET[id]'");
$data = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<h1 class="container">Edit Data </h1>
<br>
<form method="post" action="gproses.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <div class="container">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" name="komentar"
                rows="3"><?php echo $data['komentar']; ?></textarea>
        </div>
        <button type="reset" value="reset" name="reset" class="btn btn-danger">Reset</button>
        <button type="submit" value="submit" name="update" class="btn btn-primary">Update</button>
        <a href="gbook.php" class="btn btn-danger" style="float: right">Kembali</a>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>