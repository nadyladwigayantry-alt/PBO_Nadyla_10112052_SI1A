<?php

// buat class komputer
class komputer {

    // property dengan hak akses
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";

    // method untuk akses processor (public sebagai jembatan)
    public function tampilkan_processor() {
        return $this->jenis_processor;
    }

    public function tampilkan_jenisprocessor() {
        return $this->jenis_processor;
    }

    // ubah dari private → protected (agar bisa diakses turunan)
    protected function tampilkan_ram() {
        return $this->jenis_RAM;
    }

    protected function tampilkan_vga() {
        return $this->jenis_VGA;
    }

    public function tampilkan_vga2() {
        return $this->jenis_VGA;
    }
}

// buat class laptop (turunan)
class laptop extends komputer{

    // akses lewat method public (AMAN)
    public function display_processor() {
        return $this->tampilkan_processor();
    }

    public function display_processor2() {
        return $this->tampilkan_processor();
    }

    // protected boleh diakses di turunan
    public function display_ram() {
        return $this->jenis_RAM;
    }

    public function display_ram2() {
        return $this->tampilkan_ram();
    }

    public function display_vga() {
        return $this->tampilkan_vga();
    }

    // tetap private tapi tidak dipanggil dari luar
    private function display_processorkomputer() {
        return $this->tampilkan_processor();
    }

    // tambahin method public untuk akses private di dalam class
    public function akses_private_processor() {
        return $this->display_processorkomputer();
    }
}

// instansiasi objek
$komputer = new komputer();
$laptop = new laptop();

// menjalankan method (SEMUA AMAN)
echo "Line 61 : ".$komputer->tampilkan_processor()."<br />";
echo "Line 62 : ".$laptop->display_processor()."<br />";
echo "Line 63 : ".$laptop->display_processor2()."<br />";
echo "Line 64 : ".$laptop->tampilkan_jenisprocessor()."<br />";
echo "Line 65 : ".$laptop->display_ram()."<br />";
echo "Line 66 : ".$laptop->display_ram2()."<br />";
echo "Line 67 : ".$laptop->display_vga()."<br />";
echo "Line 68 : ".$laptop->akses_private_processor()."<br />";

?>