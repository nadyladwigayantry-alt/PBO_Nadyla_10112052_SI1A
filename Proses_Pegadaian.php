<?php
class Pegadaian
{
    public $pinjaman;
    public $bunga;
    public $lama;
    public $keterlambatan;
    public $denda;

    public function __construct($pinjaman, $bunga, $lama, $keterlambatan, $denda)
    {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama = $lama;
        $this->keterlambatan = $keterlambatan;
        $this->denda = $denda;
    }

    public function totalPinjaman(): float
    {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    public function angsuranPerBulan(): float
    {
        return $this->totalPinjaman() / $this->lama;
    }

    public function totalDenda(): float
    {
        return $this->angsuranPerBulan() * ($this->denda / 100) * $this->keterlambatan;
    }

    public function totalBayar(): float
    {
        return $this->angsuranPerBulan() + $this->totalDenda();
    }

    public function tampilHasil()
    {
        echo "<h2>Hasil Perhitungan Pegadaian</h2>";
        echo "Pinjaman Pokok : Rp " . number_format($this->pinjaman, 0, ',', '.') . "<br>";
        echo "Bunga (%) : " . $this->bunga . "%<br>";
        echo "Lama Angsuran : " . $this->lama . " bulan<br><br>";

        echo "Total Pinjaman : Rp " . number_format($this->totalPinjaman(), 0, ',', '.') . "<br>";
        echo "Angsuran Per Bulan : Rp " . number_format($this->angsuranPerBulan(), 0, ',', '.') . "<br>";
        echo "<span style='color:red;font-weight:bold;'>Ketentuan denda keterlambatan {$this->denda}% per hari dari angsuran</span><br><br>";
        echo "Keterlambatan : " . $this->keterlambatan . " hari<br>";
        echo "Total Denda : Rp " . number_format($this->totalDenda(), 0, ',', '.') . "<br>";
        echo "Besaran Pembayaran : Rp " . number_format($this->totalBayar(), 0, ',', '.') . "<br>";
    }
}

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pinjaman = $_POST['pinjaman'];
    $bunga = $_POST['bunga'];
    $lama = $_POST['lama'];
    $keterlambatan = $_POST['keterlambatan'];
    $denda = $_POST['denda'];

    $perhitungan = new Pegadaian($pinjaman, $bunga, $lama, $keterlambatan, $denda);
    $perhitungan->tampilHasil();
} else {
    echo "Silakan isi form terlebih dahulu.";
}
?>

