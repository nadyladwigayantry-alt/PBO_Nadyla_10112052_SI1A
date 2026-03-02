<?php

class Pembelian {

    public $kartuMember;
    public $totalBelanja;
    public $diskon = 0;

    public function __construct($kartuMember, $totalBelanja) {
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;
    }

    public function hitungDiskon() {

        if ($this->kartuMember == true) {

            if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } 
            elseif ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } 
            else {
                $this->diskon = 0;
            }

        } else {

            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            } 
            else {
                $this->diskon = 0;
            }

        }

        return $this->diskon;
    }

    public function totalBayar() {
        return $this->totalBelanja - $this->diskon;
    }

    public function tampilkanHasil() {

        echo "Apakah ada kartu member : " . ($this->kartuMember ? "Ya" : "Tidak") . "<br>";
        echo "Total Belanja : Rp " . $this->totalBelanja . "<br>";
        echo "Diskon        : Rp " . $this->diskon . "<br>";
        echo "Total Bayar   : Rp " . $this->totalBayar() . "<br>";
    }
}

$kartu = true;     
$total = 334000;    

$pembeli = new Pembelian($kartu, $total);
$pembeli->hitungDiskon();
$pembeli->tampilkanHasil();

?>