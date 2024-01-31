<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

$conn = open_connection();

$param_idteknisi = $_GET['idteknisi'];

$old_data = array();
$query = "SELECT * FROM tb_teknisi WHERE idteknisi = '$param_idteknisi'";
$hasil = mysqli_query($conn, $query);
if ($row = mysqli_fetch_assoc($hasil)) {
    $old_data = $row;
}

// data
$idteknisi = $_POST['idteknisi'] ?? $old_data['idteknisi'];
$namateknisi = $_POST['namateknisi'] ?? $old_data['namateknisi'];
$keahlian = $_POST['keahlian'] ?? $old_data['keahlian'];
$status = $_POST['status'] ?? $old_data['status'];

$error = '';
$isError = false;

if (isset($_POST['submit'])) {
    if ($idteknisi == '') {
        $isError = true;
        $error = 'id teknisi harus diisi!';
    }

    if (!$isError) {
        // Perbarui query Anda sesuai dengan kebutuhan Anda
        $query = "UPDATE tb_teknisi SET 
        idteknisi = '$idteknisi', 
        namateknisi = '$namateknisi',
        keahlian = '$keahlian',
        status = '$status' WHERE idteknisi = '$param_idteknisi'";
        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            $url = BASE_URL . 'teknisi/teknisi.php';
            header("Location: $url");
            exit();
        } else {
            $isError = true;
            $error = "Gagal menyimpan data: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Input Teknisi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../assets/image/png" sizes="16x16" href="../assets/images/favicon.png">
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


</head>

<body>
<?php include "../navbar.php"; ?>
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Teknisi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Input Teknisi</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data Teknisi</h4>
                                <p class="text-muted">Hati-hati dalam pengisian data!</p>
                                
                                <div class="basic-form">
                                    <form method="POST">
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">ID Teknisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="idteknisi" placeholder="Contoh: A001" value="<?= $idteknisi ?>">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Teknisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="namateknisi" placeholder="Contoh: Ridho A" value="<?= $namateknisi ?>">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Keahlian</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="keahlian" placeholder="Mikrotik" value="<?= $keahlian ?>">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="status">
                                                    <option value="IDLE">Idle</option>
                                                    <option value="Progress">Progress</option>
                                                </select>
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark" name="submit">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                      <!--**********************************
        Scripts
    ***********************************-->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/gleek.js"></script>
    <script src="../assets/js/styleSwitcher.js"></script>

</body>

</html>