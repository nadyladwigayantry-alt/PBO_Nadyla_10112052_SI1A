<?php

class Mahasiswa {

    public $nama;
    public $kelas;
    public $matkul;
    public $nilai;

    public function __construct($nama, $kelas, $matkul, $nilai){
        $this->nama   = $nama;
        $this->kelas  = $kelas;
        $this->matkul = $matkul;
        $this->nilai  = $nilai;
    }
    public function keterangan() {
        if ($this->nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
    public function tampil() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->matkul . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo $this->keterangan();
        echo "<hr>";
    }
}
$dataMahasiswa = [
    new Mahasiswa("Nadyla", "SI 1A", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Wili", "SI 1A", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Supiana", "SI 1A", "Pemrograman Berorientasi Objek", 55)
];
foreach ($dataMahasiswa as $mhs) {
    $mhs->tampil();
}
?>