<?php
require_once "../function.php";
check_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Disposisi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../assets/image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/regular.min.css" integrity="sha512-TzeemgHmrSO404wTLeBd76DmPp5TjWY/f2SyZC6/3LsutDYMVYfOx2uh894kr0j9UM6x39LFHKTeLn99iz378A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css" integrity="sha512-pZlKGs7nEqF4zoG0egeK167l6yovsuL8ap30d07kA5AJUq+WysFlQ02DLXAmN3n0+H3JVz5ni8SJZnrOaYXWBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/svg-with-js.min.css" integrity="sha512-1dRVqjH1H79nqU3U7EhqE0E6G25FHVEqfoChIwiXBLk32sOWc6ZrgDzPax1VRuBr+NJknIO6B27MdlahVuZSRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-font-face.min.css" integrity="sha512-vU8GapgME7Cc/sHTwbn2Q1eMBgE/ZBU8JL/oRo+Cw/frBXtmeekNEYbNe2gezj/cPaSdkTdERyimVSb+2F6f0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-shims.min.css" integrity="sha512-u6rY9/wehqytU8mKIhPvMDHtZmj6SbJ90Ctq8r5C+esABLe7qlQ2PY4l9gwK7xmr9fMp7d8yHvg2s3+nEsRjOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v5-font-face.min.css" integrity="sha512-DG+gORwHSOHlIRwrUl2peOlG9vcxDg8qnbI1WkCfttaERikRSgrRoDeDa1PK4uZD24IJwAeKb6TuQk+/15b66A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- datatable -->
    <link href="../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
<?php 
    include "../navbar.php"; 
?>
<!-- Body -->

  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Disposisi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Disposisi</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                            <td>NO</td>
                            <td>NO TIKET</td>
                            <td>KEAHLIAN</td>
                            <td>NAMA TEKNISI</td>
                            <td>CHECK IN</td>
                            <td>CHECK OUT</td>
                            <td>STATUS</td>
                            <td>ACTION</td>
                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        require_once "../koneksi.php";
                        $conn = open_connection();

                        $query = "SELECT tb_disposisi.notiket,tb_disposisi.updated,tb_disposisi.created,tb_teknisi.keahlian,tb_teknisi.namateknisi,tb_teknisi.status FROM tb_disposisi INNER JOIN tb_teknisi ON tb_disposisi.idteknisi = tb_teknisi.idteknisi";
                        $hasil = mysqli_query($conn, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>$row[notiket]</td>";
                            echo "<td>$row[keahlian]</td>";
                            echo "<td>$row[namateknisi]</td>";
                            echo "<td>$row[created]</td>";
                            echo "<td>$row[updated]</td>";
                            echo "<td>$row[status]</td>";
                            echo "<td><a class='btn btn-primary btn-sm' href='form_disposisi_edit.php?id={$row['notiket']}'>CHECK OUT</a>&nbsp;</td>";
                             // echo "<td><a class='btn btn-primary btn-sm' href='cetak.php' target='_BLANK'>CHECK OUT</a>&nbsp;</td>";
                            echo "</tr>";
                        }
                        ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<!-- End Body -->
<!--**********************************
        Scripts
    ***********************************-->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/gleek.js"></script>
    <script src="../assets/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="../assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="../assets/plugins/d3v3/index.js"></script>
    <script src="../assets/plugins/topojson/topojson.min.js"></script>
    <script src="../assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="../assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <!-- Datatable -->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


    <script src="../assets/js/dashboard/dashboard-1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/brands.min.js" integrity="sha512-giAmE8KpCT6HP3DEwIvW9LYVnDs79iIaKEYFTjH62EWoglWgdAJa1ahiLUfoc3NFaAeWM6E3VdQyH1Ob2dmwQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/conflict-detection.min.js" integrity="sha512-7GbltvPUq7IRdFGoi+LQVL+KNVnVDfWcyxz9BfsGXwpOuqBysP/kPOYut4RfSipXadO8CL9oT4SzzN9aPMmeYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/conflict-detection.min.js" integrity="sha512-7GbltvPUq7IRdFGoi+LQVL+KNVnVDfWcyxz9BfsGXwpOuqBysP/kPOYut4RfSipXadO8CL9oT4SzzN9aPMmeYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/regular.min.js" integrity="sha512-T4H/jsKWzCRypzaFpVpYyWyBUhjKfp5e/hSD234qFO/h45wKAXba+0wG/iFRq1RhybT7dXxjPYYBYCLAwPfE0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js" integrity="sha512-+fI924YJzeYFv7M0R29zJvRThPinSUOAmo5rpR9v6G4eWIbva/prHdZGSPN440vuf781/sOd/Fr+5ey0pqdW9w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/v4-shims.min.js" integrity="sha512-lcumC2XgVQA+cNJaYBRtZcTJ88EZ/Na2rG2yKtasO44flXlQWjvaqBqJch22AG9t/4pfD1EVD49oW8PBxtWBWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>