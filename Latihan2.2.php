<?php
class Belanja { // ini adalah class Belanja

    //ini adalah variabel instance
    public string $NamaPembeli;  // Menyimpan nama pembeli
    public string $NamaBarang="Liptint";  // Menyimpan nama barang
    public int $HargaBarang=50000;  // Harga satuan barang
    public int $JumlahBarang=2; // Jumlah barang yang dibeli
    public float $TotalBayar;  // Total bayar (akan dihitung)
    public float $Diskon;  // Diskon pembelian

    //ini adalah variabel static
    public static float $pajak = 0.02;

    //ini adalah variabel local
    public function __construct($NamaPembeli) {
        $this->NamaPembeli = $NamaPembeli;
    }
    public function hitungTotal(): float {
        $subtotal = $this->HargaBarang * $this->JumlahBarang;  // operator aritmatika *
        return $subtotal;
    }    

    public function hitungDiskon(): float {
        $Total = $this->hitungTotal() * $this->hitungDiskon;
        return $Total; //diskon10%
    }

    public function Total(): float {
        $Total = $this->hitungTotal() - $this->hitungDiskon;
        return $Total;
    }
    public function tampilRincian  ($NamaPembeli): void{
        echo "Nama Pembeli : " . $this->NamaPembeli . "<br>";
        echo "Nama Barang : " . $this->NamaBarang . "<br>";
        echo "Harga Barang : " . $this->HargaBarang . "<br>";
        echo "Jumlah Barang : " . $this->JumlahBarang . "<br>";
        echo "hitung Total : " . $this->hitungTotal . "<br>";
        echo "hitung Diskon : " . $this->hitungDiskon ."<br>";
        echo "hitung Total Bayar : " . $this->total . "<br>";
    }     

}
$belanja1 = new Belanja(NamaPembeli: "Nadyla");
$belanja1->tampilRincian(NamaPembeli: $belanja1->NamaPembeli);

?>