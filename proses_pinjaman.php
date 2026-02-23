<?php

class Pinjaman {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $terlambat;

    // Method hitung total pinjaman
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // Method hitung angsuran
    public function angsuran() {
        return $this->totalPinjaman() / $this->lama;
    }

    // Method hitung denda (0.15% per hari dari angsuran)
    public function denda() {
        return $this->angsuran() * 0.0015 * $this->terlambat;
    }

    // Method total pembayaran
    public function totalBayar() {
        return $this->angsuran() + $this->denda();
    }
}

// Membuat object
$pinjam = new Pinjaman();

// Mengisi property dari form
$pinjam->pinjaman  = htmlspecialchars($_POST['pinjaman']);
$pinjam->bunga     = htmlspecialchars($_POST['bunga']);
$pinjam->lama      = htmlspecialchars($_POST['lama']);
$pinjam->terlambat = htmlspecialchars($_POST['terlambat']);

echo "<h2>Hasil Perhitungan</h2>";
echo "Total Pinjaman : Rp " . number_format($pinjam->totalPinjaman(),0,",",".") . "<br>";
echo "Angsuran per Bulan : Rp " . number_format($pinjam->angsuran(),0,",",".") . "<br>";
echo "Denda Keterlambatan : Rp " . number_format($pinjam->denda(),0,",",".") . "<br>";
echo "Total Pembayaran : Rp " . number_format($pinjam->totalBayar(),0,",",".") . "<br>";

?>
