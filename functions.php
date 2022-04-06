<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "portofolio2");
    $s = mysqli_query ($koneksi, "SELECT * FROM user");
    $r = mysqli_query ($koneksi, "SELECT * FROM about");

    function data ($isi){
        global $koneksi;
        $h = mysqli_query ($koneksi, $isi);
        $box = [];
        while ($keluarkan = mysqli_fetch_assoc($h))
        {
            $box [] = $keluarkan;
        }
        return $box ;
    }
?>