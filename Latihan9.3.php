<?php
// class manusia
class manusia{
    // menentukan property dengan protected
    protected $nama = "Nadyla";
    var $kelas = "SI 1A";

    // method protected
    protected function nama(){
        return "Nama : ".$this->nama;
    }

    public function tampilkan_nama(){
        return $this->nama();
    }

    public function tampilkan_kelas(){
        return "Kelas : ".$this->kelas;
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method public
echo $manusia->tampilkan_nama()."<br />";
echo $manusia->tampilkan_kelas();
?>