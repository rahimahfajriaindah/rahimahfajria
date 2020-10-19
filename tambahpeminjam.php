<?php 
    if(!defined('INDEX')) die("");
    require 'config.php';
    if(isset($_POST["submit"])){
        if (tambah($_POST) > 0) {
            echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '?hal=bukupeminjam';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data tidak tidak valid!');
                document.location.href = '?hal=bukupeminjam';
                </script>
            ";
            echo mysqli_error($conn);
        }
    }
?>

<html>
    <head></head>
    <body>
    <form action="" method="post" enctype="multipart/form-data" style=" color:black">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" style="margin-right: 30px">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama" style="width:300px">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" style="margin-right: 30px">NIM</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nim" name="nim" style="width:300px">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" style="margin-right: 30px">Program Studi</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="prodi" name="prodi" style="width:300px">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" style="margin-right: 30px">Nama Buku</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="namabuku" name="namabuku" style="width:300px">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" style="margin-right: 30px">Kode Buku</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="kodebuku" name="kodebuku" style="width:300px">
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggalpinjaman" class="col-sm-2 col-form-label" style="margin-right: 30px">Tanggal Pinjaman</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" id="tglpinjaman" name="tglpinjaman" style="width:200px">
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggalpengembalian" class="col-sm-2 col-form-label" style="margin-right: 30px">Tanggal Pengembalian</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" id="tglpengembalian" name="tglpengembalian" style="width:200px">
    </div>
  </div>


  <div class="form-group row">
    <label for="tujuan" class="col-sm-2 col-form-label" style="margin-right: 30px">No. HandPhone</label>
    <div class="col-sm-5">
    <textarea class="form-control" id="nohp"  name="nohp" style="width:300px"></textarea>
    </div>
    </div>

<button type="submit" name="submit" class="btn btn-primary">Tambah</button>

</form>
    </body>
</html>