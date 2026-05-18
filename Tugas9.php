<?php
// CLASS INDUK
class Tabungan {
    protected $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
    }

    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak cukup!\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// CLASS ANAK
class Siswa extends Tabungan {
    private $nama;

    public function __construct($nama, $saldoAwal) {
        parent::__construct($saldoAwal);
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// ARRAY SISWA
$siswa = [
    new Siswa("Siswa 1", 100000),
    new Siswa("Siswa 2", 150000),
    new Siswa("Siswa 3", 200000)
];

// FILE LOG
$file = fopen("log_tabungan.txt", "a");

// TAMPILKAN SALDO AWAL
echo "=== SALDO AWAL ===\n";
for ($i = 0; $i < count($siswa); $i++) {
    echo $i . ". " . $siswa[$i]->getNama() . " : " . $siswa[$i]->getSaldo() . "\n";
}

// LOGIN SISWA
echo "\nLogin sebagai siswa (0-2): ";
$login = trim(fgets(STDIN));

if (!isset($siswa[$login])) {
    echo "Login gagal!\n";
    exit;
}

echo "Login berhasil sebagai " . $siswa[$login]->getNama() . "\n";

// MENU KHUSUS SISWA TERPILIH
do {
    echo "\n=== MENU ===\n";
    echo "1. Setor\n";
    echo "2. Tarik\n";
    echo "3. Lihat Saldo\n";
    echo "4. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {
        case 1:
            echo "Masukkan jumlah setor: ";
            $jumlah = trim(fgets(STDIN));
            $siswa[$login]->setor($jumlah);
            echo "Setor berhasil!\n";
            fwrite($file, $siswa[$login]->getNama() . " setor: $jumlah\n");
            break;

        case 2:
            echo "Masukkan jumlah tarik: ";
            $jumlah = trim(fgets(STDIN));
            $siswa[$login]->tarik($jumlah);
            fwrite($file, $siswa[$login]->getNama() . " tarik: $jumlah\n");
            break;

        case 3:
            echo "Saldo anda: " . $siswa[$login]->getSaldo() . "\n";
            break;
    }

} while ($menu != 4);

fclose($file);

echo "Program selesai.\n";
?>