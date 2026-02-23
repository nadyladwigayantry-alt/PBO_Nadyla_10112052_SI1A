<!DOCTYPE html>
<html>
<head>
    <title>Toko Pegadaian Syariah</title>
</head>
<body>

<h2>TOKO PEGADAIAN SYARIAH</h2>
<h3>Program Penghitung Besaran Angsuran Hutang</h3>

<form action="proses_pinjaman.php" method="POST">

    Besar Pinjaman :
    <input type="number" name="pinjaman" required><br><br>

    Masukan Besar Bunga (%) :
    <input type="number" name="bunga" required><br><br>

    Lama Angsuran (bulan) :
    <input type="number" name="lama" required><br><br>

    Keterlambatan Angsuran (hari) :
    <input type="number" name="terlambat" required><br><br>

    <input type="submit" value="Hitung">

</form>

</body>
</html>