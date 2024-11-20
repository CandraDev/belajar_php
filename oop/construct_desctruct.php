<?php 

class Kucing {
    public function __construct()
    {
        echo 'Saya kucing miaw';
    }

    public function makan(){
        echo 'Nyam, kucingnya makan';
    }

    public function minum() {
        echo 'Ah, kucingnya minum';
    }

    public function __destruct()
    {
        echo 'Suara kucing miawwwwww ngek';
    }
}

$meong = new Kucing();

echo "<br/>";
$meong->makan(); 
echo "<br/>";
$meong->minum(); 
echo "<br/>";