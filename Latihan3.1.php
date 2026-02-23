<?php
class Kendaraan
{
    public $JumlahRoda=4;
    public $Warna;
    public $BahanBakar="premium";
    public $Harga=100000000; //
    public $Merek;
    public $tahunPembuatan=2004;
    public function  statusHarga(): string
    {
        if ($this->harga>50000000)
        {
            $status = "Harga Kendaraan Mahal";
        }
        else
        {
            $status = "Harga Kendaraan Murah";
        }
    return $status;
    }
    function statusSubsidi(): string
    {
        if ($this->tahunPembuatan <= 2005 && $this->BahanBakar=="Premium"){
            $status = "DAPAT SUBSIDI";
        }
        else{
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
       
}
$ObjekKendaraan = new Kendaraan ();
echo "JumlahRoda : ".$ObjekKendaraan->JumlahRoda."<br/>";
echo "statusHarga : ". $ObjekKendaraan->statusHarga();
echo "statusSubsidi : ". $ObjekKendaraan->statusSubsidi();

    $ObjekKendaraan1 = new Kendaraan;
    $ObjekKendaraan1 ->Harga=1000000;
    $ObjekKendaraan1 ->tahunPembuatan = 1999;

    echo "statusHarga : ".$ObjekKendaraan ->statusHarga();

    $ObjekKendaraan2 = new Kendaraan;
    $ObjekKendaraan2 ->BahanBakar="pertamax";
    $ObjekKendaraan2 ->tahunPembuatan = 1999;

    echo "<br/>";
    echo "status BBM:".$ObjekKendaraan2 ->dapatSubsidi();
    echo "<br/>";
    echo "HargaBekas:".$ObjekKendaraan2 ->hargaSecondKendaraan();
