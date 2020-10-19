<?php
    if(!defined('INDEX')) die("");
    $halaman = array("menu", "bukupeminjam", "tambahpeminjam", "ubah", "hapus");
    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "menu";
    foreach($halaman as $h){
        if($hal == $h){
            include "$h.php";
            break;
        }
    }
?>