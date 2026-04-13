<?php

class Karyawan
{
    public $nama;
    public $golongan;
    public $jamLembur;
    public $gajiPokok;
    public $totalGaji;

    // Constructor
    public function __construct($nama, $golongan, $jamLembur)
    {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = (int)$jamLembur;

        $this->gajiPokok = $this->getGajiPokok();
        $this->totalGaji = $this->gajiPokok + ($this->jamLembur * 15000);
    }

    // Destructor
    public function __destruct()
    {
        // echo "Objek {$this->nama} dihapus\n";
    }

    // Method get gaji pokok
    public function getGajiPokok()
    {
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000
        ];

        return $gaji[$this->golongan] ?? 0;
    }

    // Tampilkan data
    public function tampil()
    {
        echo "{$this->nama} | {$this->golongan} | {$this->jamLembur} | Rp" . number_format($this->totalGaji, 0, ',', '.') . "\n";
    }

    // Update data
    public function update($nama, $golongan, $jamLembur)
    {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;

        $this->gajiPokok = $this->getGajiPokok();
        $this->totalGaji = $this->gajiPokok + ($this->jamLembur * 15000);
    }
}

// ==============================
// ARRAY DATA
// ==============================
$data = [];

// ==============================
// MENU
// ==============================
do {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {

        case 1:
            echo "\n===== DATA GAJI KARYAWAN =====\n";
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            foreach ($data as $i => $karyawan) {
                echo ($i + 1) . " | ";
                $karyawan->tampil();
            }
            break;

        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan: ";
            $gol = trim(fgets(STDIN));

            echo "Jam Lembur: ";
            $lembur = trim(fgets(STDIN));

            $data[] = new Karyawan($nama, $gol, $lembur);
            echo "Data berhasil ditambahkan.\n";
            break;

        case 3:
            echo "Pilih nomor data: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($data[$index])) {
                echo "Nama baru: ";
                $nama = trim(fgets(STDIN));

                echo "Golongan baru: ";
                $gol = trim(fgets(STDIN));

                echo "Jam lembur baru: ";
                $lembur = trim(fgets(STDIN));

                $data[$index]->update($nama, $gol, $lembur);
                echo "Data berhasil diupdate.\n";
            } else {
                echo "Data tidak ditemukan.\n";
            }
            break;

        case 4:
            echo "Pilih nomor data: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($data[$index])) {
                unset($data[$index]);
                $data = array_values($data); // reset index
                echo "Data berhasil dihapus.\n";
            } else {
                echo "Data tidak ditemukan.\n";
            }
            break;

        case 5:
            echo "Program selesai.\n";
            break;

        default:
            echo "Menu tidak valid.\n";
    }

} while ($menu != 5);

?>