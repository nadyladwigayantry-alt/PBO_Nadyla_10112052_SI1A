<?php

class Employee {
    public $nama;
    public $gaji;
    public $masaKerja;

    public function __construct($nama, $gaji, $masaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->masaKerja = $masaKerja;
    }

    public function getGaji() {
        return $this->gaji;
    }
}

class Programmer extends Employee {
    public function getGaji() {
        if ($this->masaKerja < 1) {
            return $this->gaji;
        } elseif ($this->masaKerja <= 10) {
            return $this->gaji + (0.01 * $this->masaKerja * $this->gaji);
        } else {
            return $this->gaji + (0.02 * $this->masaKerja * $this->gaji);
        }
    }
}

class Direktur extends Employee {
    public function getGaji() {
        $bonus = 0.5 * $this->masaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->masaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }
}

class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stock;
    public $terjual;

    public function __construct($nama, $gaji, $masaKerja, $hargaBarang, $stock, $terjual) {
        parent::__construct($nama, $gaji, $masaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stock = $stock;
        $this->terjual = $terjual;
    }

    public function getGaji() {
        $persen = ($this->terjual / $this->stock) * 100;

        if ($persen > 70) {
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}

$data = [
    new Programmer("Nadyla", 5000000, 5),
    new Direktur("Dilla", 10000000, 8),
    new PegawaiMingguan("Nadyl", 3000000, 2, 50000, 100, 80)
];

echo "<h2>Data Gaji Pegawai</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Masa Kerja</th>
        <th>Gaji Akhir</th>
      </tr>";

foreach ($data as $d) {
    echo "<tr>";
    echo "<td>{$d->nama}</td>";
    echo "<td>" . get_class($d) . "</td>";
    echo "<td>{$d->masaKerja} tahun</td>";
    echo "<td>Rp " . number_format($d->getGaji(), 0, ",", ".") . "</td>";
    echo "</tr>";
}

echo "</table>";

?>