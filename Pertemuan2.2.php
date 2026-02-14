<?php

class KalkulatorSuhu {

    public float $celcius;
    public float $fahrenheit = 0;
    public float $kelvin = 0;

    public function __construct($celcius) {
        $this->celcius = $celcius;
    }

    public function hitungSuhu(): void {
        $this->fahrenheit = ($this->celcius * 9/5) + 32;
        $this->kelvin = $this->celcius + 273.15;
    }

    public function tampilHasil(): void {
        $this->hitungSuhu();

        echo "Suhu Celcius : " . $this->celcius . " °C<br>";
        echo "Suhu Fahrenheit : " . $this->fahrenheit . " °F<br>";
        echo "Suhu Kelvin : " . $this->kelvin . " K<br>";
    }
}

$suhu1 = new KalkulatorSuhu(50);
$suhu1->tampilHasil();

?>

