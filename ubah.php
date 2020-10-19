<?php 
if(!defined('INDEX')) die("");
require 'config.php';
//ambil data dari url
$id = $_GET['id'];

$dfmahasiswa = query("SELECT * FROM buku WHERE id = $id")[0];   
if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href ='?hal=bukupeminjam';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('Data Gagal diubah!');
            document.location.href ='?hal=bukupeminjam';
            </script>
        ";
    }
}


 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
</head>
<body>
    
    <form action="" method="post" style="margin-left:10px; color:black">
    <h1 style="width:600px; text-align:center; margin-bottom:50px">Ubah Data</h1>
        <input type="hidden" name="id" value="<?= $dfmahasiswa["id"];  ?>">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" name="nama" id="nama" size="40" required autocomplete="off" value="<?= $dfmahasiswa["nama"]; ?>">            
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-4">
                <input type="text" name="nim" id="nim" required autocomplete="off"  value="<?= $dfmahasiswa['nim']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-4">
                <input type="text" name="prodi" id="prodi" size="40" required autocomplete="off"  value="<?= $dfmahasiswa['prodi']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
                <div class="col-sm-4">
                <input type="text" name="namabuku" id="namabuku" size="40" required autocomplete="off"  value="<?= $dfmahasiswa['namabuku']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Kode Buku</label>
                <div class="col-sm-4">
                <input type="text" name="kodebuku" id="kodebuku" required autocomplete="off"  value="<?= $dfmahasiswa['kodebuku']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-4">
                <input type="date" name="tglpinjaman" id="tglpinjaman" size="40" required autocomplete="off"  value="<?= $dfmahasiswa['tglpinjaman']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-4">
                <input type="date" name="tglpengembalian" id="tglpengembalian" size="40" required autocomplete="off"  value="<?= $dfmahasiswa['tglpengembalian']; ?>">        
                </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">No. HandPhone</label>
                <div class="col-sm-4">
                <input type="text" name="nohp" id="nohp" required autocomplete="off"  value="<?= $dfmahasiswa['nohp']; ?> " onkeypress="return event.charCode >= 48 && event.charCode <=57">        
                </div>
        </div>

        

        <button type="submit" name="submit">Ubah</button>
        
        
   </form>
</body>
</html>