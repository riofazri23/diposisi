<?php
require_once "../function.php";
check_login();
?>
<!DOCTYPE html>
<html>

<head>
    <title>FORM TEKNISI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
      
</head>

<body>
    <?php include "../navbar.php"; ?>


    </div>
    <main class="my-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <table class="table table-striped text-center bg-light" style="border: 1;padding: 10px;">

                        <tr>
                            <td>NO</td>
                            <td>ID TIKET</td>
                            <td>PERUSAHAAN</td>
                            <td>ALAMAT</td>
                            <td>KEAHLIAN</td>
                            <td>NAMA TEKNISI</td>
                            <td>STATUS</td>
                        </tr>
                        <?php
                        require_once "../koneksi.php";
                        $conn = open_connection();

                        $query = "SELECT notiket, perusahaan, alamat, keahlian, namateknisi, status FROM tb_disposisi";
                        $hasil = mysqli_query($conn, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>$row[notiket]</td>";
                            echo "<td>$row[perusahaan]</td>";
                            echo "<td>$row[alamat]</td>";
                            echo "<td>$row[keahlian]</td>";
                            echo "<td>$row[namateknisi]</td>";
                            echo "<td>$row[status]</td>";
                            //echo "<td><a class='btn btn-primary btn-sm' href='form_teknisi_edit.php?idteknisi=$row[notiket]'>EDIT</a></td>
          //<td><a class='btn btn-danger btn-sm' href='action_hapus_datateknisi.php?idteknisi=$row[notiket]'>HAPUS</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
    </main>
    </nav>
</body>

</html>