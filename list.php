<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<br>
<h1 class="container">List Data Buku Tamu</h1>
<br>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr class="table-success" style='text-align: center;'>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Hari Tanggal ( Data Dibuat )</th>
                <th scope="col">Email</th>
                <th scope="col">Komentar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    include("koneksi.php");
                    $sql = "SELECT * FROM tamu";
                    $query = mysqli_query($db, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $no . "</th>";
                        echo "<td>" . $data['nama'] . "</td>";
                        echo "<td>" . $data['date_create'] . "</td>";
                        echo "<td>" . $data['email'] . "</td>";
                        echo "<td>" . $data['komentar'] . "</td>";
                        echo "<td style='text-align: center;'>";
                        echo "<a href='gedit.php?id=" . $data['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                        echo " | " ;
                        echo "<a href='ghapus.php?id=" . $data['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>";
                        echo "</tr>";
                        
                        $no++;
                    }
                    ?>
        </tbody>
    </table>
    <a href="gbook.php" style="justify-content: center;" class="btn btn-success">Input Data Tamu</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>