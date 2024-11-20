<?php

function segitiga($alas, $tinggi)
{
    echo "<b>Menghitung Luas Segitiga</b><br>";
    echo "Panjang : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    $hasil = $alas * $tinggi / 2;
    echo "Hasilnya : $hasil <br>";
}

function persegi($sisi)
{
    echo "<b>Menghitung Persegi</b><br>";
    echo "Sisi : $sisi <br>";
    $hasil = $sisi * $sisi;
    echo "Hasilnya : $hasil <br>";
}

function persegipanjang($panjang, $lebar)
{
    echo "<b>Menghitung Persegi Panjang</b><br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    $hasil = $panjang * $lebar;
    echo "Hasilnya : $hasil <br>";
}

function lingkaran($jariJari)
{
    echo "<b>Menghitung Lingkaran</b><br>";
    echo "Jari-jari : $jariJari <br>";
    $hasil = $jariJari * $jariJari * pi();
    echo "Hasilnya : $hasil <br>";
}

segitiga(3, 3);
persegi(5);
persegipanjang(3, 8);
lingkaran(6);
