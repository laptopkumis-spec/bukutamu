<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h1>Input Buku Tamu</h1>
        <br>
        <form action="gproses.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="komentar" class="form-label">Komentar</label>
                <textarea type="komentar" class="form-control" id="komentar" name="komentar" rows="3"></textarea>
            </div>
            <button type="reset" value="reset" name="reset" class="btn btn-danger">Reset</button>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="list.php" class="btn btn-success" style="float: right">Lihat Buku Tamu</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>