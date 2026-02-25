<?php
function formatrupiah($angka) {
return "Rp." . number_format($angka, 0, ",", ".");
}

    class belanja{
    public $namapembeli;    
    public $namabarang;
    public $hargabarang;
    public $jumlahbeli;
    public function hitungsubtotal() {
    return $this->hargabarang * $this->jumlahbeli;
    }

public function hitungtotaldengandiskon($persenDiskon){
    $subtotal = $this->hitungsubtotal();
    $diskon = ($persenDiskon / 100) * $subtotal;
    return $subtotal - $diskon;
    }
}
$data = [
    'namapembeli' => 'Nadyla',
    'namabarang'=> 'Liptint',
    'hargabarang' => 55000,
    'jumlahbeli' => 10
];
$belanja = new belanja();
$belanja->namapembeli = $data["namapembeli"];
$belanja->namabarang = $data["namabarang"];
$belanja->hargabarang = $data["hargabarang"];
$belanja->jumlahbeli = $data ["jumlahbeli"];

echo "<h2> struk belanja sociolla A </h2>";
echo "pembeli: " .  $belanja->namapembeli . "<br>";
echo "barang: " . $belanja->namabarang . "<br>";
echo "subtotal: " .formatrupiah($belanja->hitungsubtotal()) . "<br>";
echo "Total Diskon 20%: " .formatrupiah($belanja->hitungtotaldengandiskon (20));

?>
