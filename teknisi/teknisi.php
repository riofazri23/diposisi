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
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
        
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

        

      
</head>

<body>
    <?php include "../navbar.php"; ?>


    </div>
    <main class="my-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6 align-self-start">
                    <a href="form_teknisi.php" class="btn btn-primary my-3 " style="width: 30%;">Tambah</a>

                </div>
                <div class="col-sm-12">

                    <table id="example" class="table table-striped text-center bg-light display" style="border: 1;padding: 10px;" >
                        <thead>
                        <tr>
                            <td>NO</td>
                            <td>ID TEKNISI</td>
                            <td>NAMA TEKNISI</td>
                            <td>KEAHLIAN</td>
                            <td>STATUS</td>
                            <td>ACTION</td>
                        </tr>
                            </thead>
                            <tbody>
                        <?php
                        require_once "../koneksi.php";
                        $conn = open_connection();

                        $query = "SELECT idteknisi, namateknisi, keahlian, status FROM tb_teknisi";
                        $hasil = mysqli_query($conn, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>$row[idteknisi]</td>";
                            echo "<td>$row[namateknisi]</td>";
                            echo "<td>$row[keahlian]</td>";
                            echo "<td>$row[status]</td>";
                            echo "<td><a class='btn btn-primary btn-sm' href='form_teknisi_edit.php?idteknisi=$row[idteknisi]'>EDIT</a> &nbsp;</td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    </nav>
</body>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'lBfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

</html>