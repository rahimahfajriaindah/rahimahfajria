<?php

define('INDEX', true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpustakaan</title>
        <link rel="stylesheet" href="kunjungan.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="header-kanan">
                <h2>Teknik Komputer | Perpustakaan Kampus</h2>
            </div>
            <div class="header-kiri">
                <h3><a href="">Beranda</a></h3>
            </div>
        </div>
            <section style="display: flex; flex-wrap: wrap; justify-content: center;">   
                <?php include "konten.php"; ?>
            </section>
            <aside>  
            <div class="logo-polmed" style="text-align: center; margin-bottom: 40px">
                <img src="logo.png" width="150" height="150">
                <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Politeknik Negeri Medan</p>

            </div>
            </aside>
            </div>
             
    </body>
</html>