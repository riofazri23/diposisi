<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

$list_teknisi = get_data_teknisi();

$notiket = $_POST['notiket'] ?? '';
$created = $_POST['created'] ?? '';
// $keahlian = $_POST['keahlian'] ?? '';
$idteknisi = $_POST['idteknisi'] ?? '';

$error = '';
$isError = false;

if (isset($_POST['submit'])) {
    if ($notiket == '') {
        $isError = true;
        $error = 'No Tiket harus diisi!';
    }

    if (!$isError) {
    $conn = open_connection();

    $query = "INSERT INTO tb_disposisi (notiket, created, idteknisi) VALUES  ('$notiket','$created', '$idteknisi') ";
    // printf($query);
    $hasil = mysqli_query($conn, $query);

        



    if ($hasil) {
        $url = BASE_URL . 'disposisi/data_disposisi.php';
        header("Location:$url");
        exit();
    } else {
        $isError = true;
        $error = "Gagal menyimpan data: " . mysqli_error($conn);
    }


    }
}

// Fetch and display data from the database
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
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
                                <h4 class="card-title">Buka Tiket</h4>
                                <p class="text-muted">Hati-hati dalam pengisian data!</p>
                                
                                <div class="basic-form">
                                    <form method="POST">
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">No Tiket</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="notiket" placeholder="Contoh: A001">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Check In</label>
                                            <div class="col-sm-9">
                                                <input type="datetime-local" class="form-control" name="created">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Keahlian</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="keahlian" name="keahlian">
                                                <?php
                    if (count($list_teknisi) > 0) {
                        foreach ($list_teknisi as $namakeahlian => $namateknisi) {
                            $terpilih = ($keahlian == $namakeahlian) ? 'selected' : '';
                            echo "<option value='$namakeahlian' $terpilih> $namateknisi </option>";
                        }
                    }
                    ?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama teknisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="namateknisi" id="namateknisi" value="<?= get_nama_teknisi($namateknisi) ?>"readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="status" id="status" value="<?= get_nama_teknisi($status) ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                            <input hidden type="text" name="idteknisi" id="idteknisi" class="form-control" placeholder="Status Saat ini"
                    value="<?= get_idteknisi($idteknisi) ?>"></div>
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
<script>
    <!-- Inside your HTML file -->

// Define an object to hold the teknisi data
var dataTeknisi = {
    <?php foreach ($list_teknisi as $idteknisi => $namateknisi) { ?>
        "<?php echo $idteknisi ?>": {
            "namateknisi": "<?php echo get_nama_teknisi($idteknisi) ?>",
            "status": "<?php echo get_status($idteknisi) ?>",
            "idteknisi": "<?php echo get_idteknisi($idteknisi) ?>"
        },
    <?php } ?>
};

// Function to update form values based on selected teknisi
function updateFormValues() {
    var teknisi = document.getElementById("keahlian").value;
    var namateknisiInput = document.getElementById("namateknisi");
    var statusInput = document.getElementById("status");
    var idteknisiinput = document.getElementById("idteknisi");

    // Retrieve data from the dataTeknisi object
    var namateknisi = dataTeknisi[teknisi].namateknisi;
    var status = dataTeknisi[teknisi].status;
    var idteknisi = dataTeknisi[teknisi].idteknisi;

    // Update the form fields with the retrieved data
    namateknisiInput.value = namateknisi;
    statusInput.value = status;
    idteknisiinput.value = idteknisi;

    // console.log(idteknisiinput.value)
}

// Add an event listener for the dropdown change event
var keahlianDropdown = document.getElementById("keahlian");
    keahlianDropdown.addEventListener("change", updateFormValues);

// Call the updateFormValues function initially
updateFormValues();
</script>

</html>