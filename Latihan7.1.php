<?php

class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        return "Produk: $this->nama - Rp" . number_format($this->harga,0,",",".");
    }
}

class ProdukDigital extends Produk {
    public $ukuranFile;

    public function __construct($nama, $harga, $ukuranFile){
        parent::__construct($nama,$harga);
        $this->ukuranFile = $ukuranFile;
    }

    public function getInfo(){
        return "ProdukDigital: $this->nama - Rp" . number_format($this->harga,0,",",".") . " - Size: $this->ukuranFile MB";
    }
}

$data = [
    ["tipe" => "produk", "nama" => "Buku", "harga" => 5000],
    ["tipe" => "digital", "nama" => "Ebook", "harga" => 100000, "size" => 25]
];

foreach ($data as $d) {

    if ($d["tipe"] == "produk") {
        $obj = new Produk($d["nama"], $d["harga"]);
    } else {
        $obj = new ProdukDigital($d["nama"], $d["harga"], $d["size"]);
    }

    echo $obj->getInfo() . "<br>";
}

?>