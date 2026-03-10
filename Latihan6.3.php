<?php

$data = [
    ["nama"=>"Dian","nilai"=>80],
    ["nama"=>"Nadyla","nilai"=>85],
    ["nama"=>"Dealova","nilai"=>70]
];

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach($data as $d){
    echo "<tr>";
    echo "<td>".$d["nama"]."</td>";
    echo "<td>".$d["nilai"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>