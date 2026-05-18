<?php
class manusia{
    // prop
    private $nama="Nadyla";
    private $kelas = "SI 1A";

    // method manusia
    private function m_nama(){
        return $this->nama;
    }

    public function tampilkan_nama(){
        return $this->m_nama();
    }

    function tampilkan_kelas(){
        return $this->kelas;
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method
echo "Nama : ".$manusia->tampilkan_nama()."<br />";
echo "Kelas : ".$manusia->tampilkan_kelas();
?>