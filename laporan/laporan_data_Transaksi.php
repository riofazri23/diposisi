<?php
require_once "../function.php";
check_login();
?>
<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN TRANSAKSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <?php include "../navbar.php"; ?>

    <main class="my-5">
        <div class="container">
            <div class="row mb-2">
               
            </div>
            <div class="col-sm-12">
            <h3 class="text-center mb-4">Laporan Data Transaksi</h3>
                <table class="table table-striped text-center bg-light" style="border: 1;padding: 10px;">
                    <tr>
                        <th>NO</th>
                        <th>KODE TRANSAKSI</th>
                        <th>KODE KARYAWAN</th>
                        <th>NAMA KARYAWAN</th>
                        <th>NAMA JABATAN</th>
                        <th>TANGGAL INPUT</th>
                        <th>GAJI POKOK</th>
                        <th>UANG MAKAN</th>
                        <th>TUNJANGAN BPJS</th>
                        <th>TOTAL GAJI</th>
                        
                    </tr>
                    <?php
                    require_once "../koneksi.php";
                    $conn = open_connection();

                    $query = "SELECT kodetransaksi, kodekaryawan, namakaryawan, namajabatan, tglinput, gajipokok, uangmakan, tunjanganbpjs, totalgaji FROM tb_transaksi";
                    $hasil = mysqli_query($conn, $query);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($hasil)) {
                        echo "<tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row['kodetransaksi'] . "</td>";
                        echo "<td>" . $row['kodekaryawan'] . "</td>";
                        echo "<td>" . $row['namakaryawan'] . "</td>";
                        echo "<td>" . $row['namajabatan'] . "</td>";
                        echo "<td>" . $row['tglinput'] . "</td>";
                        echo "<td>" . $row['gajipokok'] . "</td>";
                        echo "<td>" . $row['uangmakan'] . "</td>";
                        echo "<td>" . $row['tunjanganbpjs'] . "</td>";
                        echo "<td>" . $row['totalgaji'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
