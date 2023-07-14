<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp | Halaman Utama</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="#">MyApp</a>

<button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">

<a class="nav-link" aria-current="page" href="pasien.php">Home</a>
<a  href="logout.php" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>


</li>

<li class="nav-item">


</li>
</ul>
</div>
</div>
</nav>
<div class="row mt-3">
<div class="col-sm">
<marquee > RUMAH SAKIT Y-TEAM BERSAMA</marquee>
<h3>Tabel Pasien</h3>
</div>
</div>
<div class="row">
<div class="col">
</div>
</div>
<div class="row mt-3">
<div class="col">

<table class="table table-striped table-hover table-
sm">

<tr>
<th>No</th>
<th>ID Pasien</th>
<th>Nama Pasien</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Jenis Vaksin</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$hasil = $koneksi->query("SELECT * FROM pasien");
?>

<?php
while ($row = $hasil->fetch_assoc()) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row['idPasien']; ?></td>
<td><?= $row['nmPasien']; ?></td>
<td><?= $row['jk']; ?></td>
<td><?= $row['alamat']; ?></td>
<td><?= $row['jv']; ?></td>
<div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>