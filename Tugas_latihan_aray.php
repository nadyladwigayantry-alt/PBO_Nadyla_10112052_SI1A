<?php

function cekKelulusan($nilai) {
    if ($nilai >= 70) {
        return "Lulus Kuis";
    } else {
        return "Tidak Lulus Kuis";
    }
}

$mahasiswa = [
    [
        "nama" => "Nadyla",
        "kelas" => "SI 2",
        "mata_kuliah" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ],
    [
        "nama" => "Wili",
        "kelas" => "SI 2",
        "mata_kuliah" => "Pemrograman Berorientasi Objek",
        "nilai" => 75
    ],
    [
        "nama" => "Supiana",
        "kelas" => "SI 2",
        "mata_kuliah" => "Pemrograman Berorientasi Objek",
        "nilai" => 55
    ]
];

echo "<h2>Data Nilai PBO Mahasiswa</h2>";
echo "<hr>";

foreach ($mahasiswa as $data) {
    echo "Nama : " . $data["nama"] . "<br>";
    echo "Kelas : " . $data["kelas"] . "<br>";
    echo "Mata Kuliah : " . $data["mata_kuliah"] . "<br>";
    echo "Nilai : " . $data["nilai"] . "<br>";
    echo cekKelulusan($data["nilai"]);
    echo "<hr>";
}

?>