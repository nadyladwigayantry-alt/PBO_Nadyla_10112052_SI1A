<!DOCTYPE html>
<html>
<head>
    <title>Form Pegadaian</title>
</head>
<body>
<h2>Form Input Data Pegadaian</h2>
<form action="proses_pegadaian.php" method="POST">
    Pinjaman Pokok: <input type="number" name="pinjaman" required><br><br>
    Bunga (%) : <input type="number" name="bunga" required><br><br>
    Lama Angsuran (Bulan): <input type="number" name="lama" required><br><br>
    Keterlambatan Bayar (Hari): <input type="number" name="keterlambatan" required><br><br>
    Denda Per Hari (%) : <input type="number" name="denda" step="0.01" required><br><br>
    <input type="submit" value="Hitung">
</form>
</body>
</html>