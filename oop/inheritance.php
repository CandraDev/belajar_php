<?php

class Kendaraan{
    protected $warna = 'Hitam';

    public function a(){
        echo "Saya adalah kendaraan/";
    }

    public function tampilWarna(){
        echo $this->warna;
    }
}

class Mobil extends Kendaraan{
    public function b(){
        $this->a();
        echo "Warna saya adalah {$this->tampilWarna()}";
    }
};

$honda = new Mobil();

$honda->b();