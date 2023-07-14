<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Edit Data Pasien</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Edit Data Pasien</h3>
<?php
include 'koneksi.php';
$panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");
?>
<?php
while ($row = $panggil->fetch_assoc()) {
?>
<form action="koneksi.php" method="POST">
<div class="form-group">
<label for="idPasien">ID Pasien</label>

<input type="text" class="form-control mb-
3" name="idPasien" value="<?= $row['idPasien'] ?>" readonly>

</div>

<div class="form-group">
<label for="nmPasien">Nama Pasien</label>

<input type="text" class="form-control mb-
3" name="nmPasien" value="<?= $row['nmPasien'] ?>">

</div>

<div class="form-group">

<label for="jk">Jenis Kelamin</label>
<div class="form-check">

<input type="radio" class="form-check-
input" name="jk" value="perempuan" <?php if (($row['jk']) === "perempu

an") {
echo "checked";
} ?>> Perempuan
</div>

<div class="form-check">

<input type="radio" class="form-check-
input" name="jk" value="laki-laki" <?php if (($row['jk']) === "laki-
laki") {

echo "checked";
} ?>> Laki-laki
</div>
<div class="form-group mt-3">
<label for="alamat">Alamat</label>

<textarea class="form-
control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alam

at"><?= $row['alamat'] ?></textarea>
</div>

<div class="form-group mt-3">

<input type="submit" name="edit" value
="Edit" class="form-control btn btn-primary">
</div>
</div>
</form>
<?php } ?>
</div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>