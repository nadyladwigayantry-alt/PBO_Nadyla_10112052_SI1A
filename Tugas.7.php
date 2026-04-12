<?php

class Employee {  // CLASS INDUK
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji(){  //Untuk menghitung gaji
        return $this->gaji;
    }

    public function getInfo(){  //Informasi pegawai
        return "$this->nama - Gaji: Rp" . number_format($this->hitungGaji(),0,",",".");
    }
}

class Programmer extends Employee {

    public function hitungGaji(){  //Method hitungGaji
        if ($this->lamaKerja < 1){
            return $this->gaji;
        } elseif ($this->lamaKerja <= 10){
            return $this->gaji + ($this->gaji * 0.01 * $this->lamaKerja);
        } else {
            return $this->gaji + ($this->gaji * 0.02 * $this->lamaKerja);
        }
    }
}

class Direktur extends Employee {

    public function hitungGaji(){  //Overriding method hitungGaji
        $bonus = $this->gaji * 0.5 * $this->lamaKerja;
        $tunjangan = $this->gaji * 0.1 * $this->lamaKerja;
        return $this->gaji + $bonus + $tunjangan;
    }
}

class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stock;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stock, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stock = $stock;
        $this->terjual = $terjual;
    }

    public function hitungGaji(){  //Overriding hitungGaji
        $persen = ($this->terjual / $this->stock) * 100;  //Menghitung persentase penjualan

        if ($persen > 70){
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}

$data = [  //Data array
    ["tipe"=>"programmer","nama"=>"Dyla","gaji"=>5000000,"lama"=>2],
    ["tipe"=>"direktur","nama"=>"Nadyl","gaji"=>10000000,"lama"=>5],
    ["tipe"=>"mingguan","nama"=>"Nadyla","gaji"=>2000000,"lama"=>1,"harga"=>50000,"stock"=>100,"terjual"=>80]
];

foreach ($data as $d){  //Proses output

    if ($d["tipe"] == "programmer"){
        $obj = new Programmer($d["nama"], $d["gaji"], $d["lama"]);
    } elseif ($d["tipe"] == "direktur"){
        $obj = new Direktur($d["nama"], $d["gaji"], $d["lama"]);
    } else {
        $obj = new PegawaiMingguan(
            $d["nama"],
            $d["gaji"],
            $d["lama"],
            $d["harga"],
            $d["stock"],
            $d["terjual"]
        );
    }

    echo $obj->getInfo() . "<br>";  //Tampilan output
}

?>