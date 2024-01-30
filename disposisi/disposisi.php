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
<html>

<head>
    <title>FORM INPUT ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include "../navbar.php"; ?>
    <div class="container custom-form container justify-content-center align-items-center my-5" style="width: 500px;">
        <?php if ($isError): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3 text-center">
                <label for="notiket" class="form-label">No Tiket</label>
                <input type="text" id="notiket" name="notiket" class="form-control" size="55" value="<?= $notiket ?>">
            </div>
            <!-- <div class="mb-3 text-center">
                <label for="hari" class="form-label">Hari</label>
                <input type="text" name="hari" id="hari" class="form-control" value="<?= $hari ?>">
            </div>
            <div class="mb-3 text-center">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" name="durasi" id="durasi" class="form-control" value="<?= $durasi ?>">
            </div> -->
            <div class="mb-3 text-center">
                <label for="durasi" class="form-label">Check In</label>
                <input type="datetime-local" name="created" id="durasi" class="form-control" value="<?= $created ?>">
            </div>
            <div class="mb-3 text-center">
                <label for="keahlian" class="form-label"> Keahlian </label>
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
            <div class="mb-3 text-center">
                <label for="namateknisi" class="form-label">Nama Teknisi</label>
                <input type="text" name="namateknisi" id="namateknisi" class="form-control"
                    placeholder="Nama Teknisi" value="<?= get_nama_teknisi($namateknisi) ?>" readonly>
            </div>
            <div class="mb-3 text-center">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Status Saat ini"
                    value="<?= get_status($status) ?>" readonly>
            </div>
            <div class="mb-3 text-center">
                <!-- <label for="status" class="form-label">Status</label> -->
                <input hidden type="text" name="idteknisi" id="idteknisi" class="form-control" placeholder="Status Saat ini"
                    value="<?= get_idteknisi($idteknisi) ?>" readonly>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

                </div>
            </div>
        </form>
    </div>
   
    
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