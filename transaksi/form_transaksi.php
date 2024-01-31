<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjadwalan Personil</title>
</head>
<body>

<h2>Form Penjadwalan Personil</h2>

<form action="transaksi.php" method="post">
    <label for="totalWaktu">Total Waktu Kerja (jam): </label>
    <input type="number" name="totalWaktu" id="totalWaktu" required>
    <br>

    <label for="personilA">Waktu Kerja Personil A (jam): </label>
    <input type="number" name="personilA" id="personilA" required>
    <br>

    <label for="personilB">Waktu Kerja Personil B (jam): </label>
    <input type="number" name="personilB" id="personilB" required>
    <br>

    <label for="personilC">Waktu Kerja Personil C (jam): </label>
    <input type="number" name="personilC" id="personilC" required>
    <br>

    <!-- Tambahkan input untuk personil lainnya sesuai kebutuhan -->

    <input type="submit" value="Jadwalkan">
</form>

</body>
</html>
