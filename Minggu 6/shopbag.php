<?php

include "index.php";




class fruit 
{
    var $totalmangga, $totaljambu, $totalsalak;

    public function __construct($mangga, $jambu, $salak)
    {
        $this -> mangga = $mangga;
        $this -> jambu = $jambu;
        $this -> salak = $salak;
    }

    public function getMangga(){
        $this -> totalmangga = $this -> mangga * 15000;
        echo "<br> harga mangga : " .$this->totalmangga;
    }

    public function getJambu(){
        $this -> totaljambu = $this -> jambu * 13000;
        echo "<br> harga jambu : " .$this->totaljambu;
    }

    public function getSalak(){
        $this -> totalsalak = $this -> salak * 10000;
        echo "<br> harga mangga : " .$this->totalsalak;
    }

    public function total(){
        $total = $this -> totalmangga + $this -> totaljambu + $this -> totalsalak;
        echo "<br> total belanjaan = " .$this -> $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new fruit($mangga, $jambu, $salak);
$transaksi-> getMangga();
$transaksi->getJambu();
$transaksi->getSalak();

?>