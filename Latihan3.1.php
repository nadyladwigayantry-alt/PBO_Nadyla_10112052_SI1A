<?php
class Kendaraan
{
    public $JumlahRoda = 4;
    public $Warna;
    public $BahanBakar = "Premium";
    public $Harga = 100000000;
    public $Merek;
    public $tahunPembuatan = 2004;

    public function statusHarga(): string
    {
        if ($this->Harga > 50000000) {
            return "Harga Kendaraan Mahal";
        } else {
            return "Harga Kendaraan Murah";
        }
    }

    public function statusSubsidi(): string
    {
        if ($this->tahunPembuatan <= 2005 && $this->BahanBakar == "Premium") {
            return "DAPAT SUBSIDI";
        } else {
            return "TIDAK DAPAT SUBSIDI";
        }
    }

    public function hargaSecondKendaraan(): int
    {
        return $this->Harga - 20000000;
    }
}

// Object 1
$ObjekKendaraan = new Kendaraan();
echo "JumlahRoda : ".$ObjekKendaraan->JumlahRoda."<br/>";
echo "statusHarga : ".$ObjekKendaraan->statusHarga()."<br/>";
echo "statusSubsidi : ".$ObjekKendaraan->statusSubsidi()."<br/><br/>";

// Object 2
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->Harga = 1000000;
$ObjekKendaraan1->tahunPembuatan = 1999;

echo "statusHarga : ".$ObjekKendaraan1->statusHarga()."<br/><br/>";

// Object 3
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->BahanBakar = "Premium";
$ObjekKendaraan2->tahunPembuatan = 1999;

echo "status BBM : ".$ObjekKendaraan2->statusSubsidi()."<br/>";
echo "Harga Bekas : ".$ObjekKendaraan2->hargaSecondKendaraan();
?>
