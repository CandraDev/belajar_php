<?php

class BangunDatar {
    public $luasSegitiga;
    public $luasLingkaran;
    public $luasPersegiPanjang;
    public $luasPersegi;

    public $kelilingSegitiga;
    public $kelilingLingkaran;
    public $kelilingPersegiPanjang;
    public $kelilingPersegi;
}

class Luas extends BangunDatar {
    public function luasSegitiga($alas, $tinggi) {
        $this->luasSegitiga = 0.5 * $alas * $tinggi;
        echo "<h3>Menghitung Luas Segitiga</h3><br/>";
        echo "Alas: $alas<br/>";
        echo "Tinggi: $tinggi<br/>";
        echo "Hasilnya: {$this->luasSegitiga}<br/>";
    }

    public function luasLingkaran($jariJari) {
        $this->luasLingkaran = 3.14 * ($jariJari * $jariJari);
        echo "<h3>Menghitung Luas Lingkaran</h3><br/>";
        echo "Jari-jari: $jariJari<br/>";
        echo "Hasilnya: {$this->luasLingkaran}<br/>";
    }

    public function luasPersegiPanjang($panjang, $lebar) {
        $this->luasPersegiPanjang = $panjang * $lebar;
        echo "<h3>Menghitung Luas Persegi Panjang</h3><br/>";
        echo "Panjang: $panjang<br/>";
        echo "Lebar: $lebar<br/>";
        echo "Hasilnya: {$this->luasPersegiPanjang}<br/>";
    }

    public function luasPersegi($sisi) {
        $this->luasPersegi = $sisi * $sisi;
        echo "<h3>Menghitung Luas Persegi</h3><br/>";
        echo "Sisi: $sisi<br/>";
        echo "Hasilnya: {$this->luasPersegi}<br/>";
    }
}

class Keliling extends BangunDatar {
    public function kelilingSegitiga($sisi1, $sisi2, $sisi3) {
        $this->kelilingSegitiga = $sisi1 + $sisi2 + $sisi3;
        echo "<h3>Menghitung Keliling Segitiga</h3><br/>";
        echo "Sisi 1: $sisi1<br/>";
        echo "Sisi 2: $sisi2<br/>";
        echo "Sisi 3: $sisi3<br/>";
        echo "Hasilnya: {$this->kelilingSegitiga}<br/>";
    }

    public function kelilingLingkaran($jariJari) {
        $this->kelilingLingkaran = 2 * 3.14 * $jariJari;
        echo "<h3>Menghitung Keliling Lingkaran</h3><br/>";
        echo "Jari-jari: $jariJari<br/>";
        echo "Hasilnya: {$this->kelilingLingkaran}<br/>";
    }

    public function kelilingPersegiPanjang($panjang, $lebar) {
        $this->kelilingPersegiPanjang = 2 * ($panjang + $lebar);
        echo "<h3>Menghitung Keliling Persegi Panjang</h3><br/>";
        echo "Panjang: $panjang<br/>";
        echo "Lebar: $lebar<br/>";
        echo "Hasilnya: {$this->kelilingPersegiPanjang}<br/>";
    }

    public function kelilingPersegi($sisi) {
        $this->kelilingPersegi = 4 * $sisi;
        echo "<h3>Menghitung Keliling Persegi</h3><br/>";
        echo "Sisi: $sisi<br/>";
        echo "Hasilnya: {$this->kelilingPersegi}<br/>";
    }
}

$luas = new Luas();
$keliling = new Keliling();

$luas->luasSegitiga(10, 5);
$luas->luasLingkaran(7);
$luas->luasPersegiPanjang(8, 4);
$luas->luasPersegi(6);

$keliling->kelilingSegitiga(5, 5, 5);
$keliling->kelilingLingkaran(7);
$keliling->kelilingPersegiPanjang(8, 4);
$keliling->kelilingPersegi(6);

?>
