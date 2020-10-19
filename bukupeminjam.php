<?php

    if(!defined('INDEX')) die("");
    require 'config.php';
    $daftartamu = mysqli_query($conn, "SELECT * FROM buku");
    if(isset($_POST["cari"])){
        $daftartamu = cari($_POST["keyword"]);
    }
?>

<div>
<h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left:10px">Data Jadwal Peminjaman Buku</h2>
</div>
<div>
<form action="" method="post" class="ml-md-3 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control" name="keyword" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autofocus>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="cari">Cari</button>
            <a href="?hal=tambahpeminjam" class="btn btn-success" style="margin-left:10px">Tambah Data</a>
        </div>
    </div>
    </form>
</div>
   
    <div class="responsive">
    <table class="table table-hover" style="width:75%; margin-left:10px; color:black">
    <thead>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Program Studi</th>
        <th scope="col">Nama Buku</th>
        <th scope="col">Kode Buku</th>
        <th scope="col">Tanggal Peminjaman</th>
        <th scope="col">Tanggal Pengembalian</th>
        <th scope="col">No. HandPhone</th>
    </thead>
    <tbody>
    <?php 
        $i = 1;
    ?>
    <?php foreach ($daftartamu as $row) { ?>
			<tr>
				<td scope="col"><?= $i;  ?></td>
				<td scope="col"><?= $row["nama"]; ?></td>
				<td scope="col"><?= $row["nim"]; ?></td>
                <td scope="col"><?= $row["prodi"]; ?></td>
                <td scope="col"><?= $row["namabuku"]; ?></td>
				<td scope="col"><?= $row["kodebuku"]; ?></td>
                <td scope="col"><?= $row["tglpinjaman"]; ?></td>
                <td scope="col"><?= $row["tglpengembalian"]; ?></td>
                <td scope="col"><?= $row["nohp"]; ?></td>
                <td scope="col">
                <a  class="btn btn-danger" href="?hal=ubah&id=<?= $row['id']; ?>">Ubah</a>
				<a  class="btn btn-danger" href="?hal=hapus&id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php  $i++; ?>
    <?php } ?>
    </tbody>
  </table>
</div>