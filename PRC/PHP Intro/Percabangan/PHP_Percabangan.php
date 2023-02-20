<?php
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];

    if($operasi == "jumlah")
    {
        $hasil = $angka1 + $angka2;
    }
    elseif($operasi == "kurang")
    {
        $hasil = $angka1 - $angka2;
    }
    elseif($operasi == "kali")
    {
        $hasil = $angka1 * $angka2;
    }
    elseif($operasi == "bagi")
    {
        $hasil = $angka1 / $angka2;
    }

    echo $hasil;
?>