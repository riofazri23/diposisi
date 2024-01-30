<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

$idteknisi = $_POST['idteknisi'] ?? '';
$namateknisi = $_POST['namateknisi'] ?? '';
$keahlian = $_POST['keahlian'] ?? '';
$status = $_POST['status'] ?? '';

$error = '';
$isError = false;
if (isset($_POST['submit'])) {
    if ($idteknisi == '') {
        $isError = true;
        $error = 'id teknisi harus diisi!';
    }

    if (!$isError) {
        // Menghitung total gaji

        $conn = open_connection();

        $query = "INSERT INTO tb_teknisi (idteknisi, namateknisi, keahlian, status) VALUES ('$idteknisi', '$namateknisi', '$keahlian', '$status')";
        $hasil = mysqli_query($conn, $query);

        if ($hasil) {
            $url = BASE_URL . 'teknisi/teknisi.php';
            header("Location:$url");
            exit();
        } else {
            $isError = true;
            $error = "Gagal menyimpan data: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>MASTER TEKNISI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include "../navbar.php"; ?>
    <main>
        <table align="center">
            <tr>
                <td>
                    <form method="POST" class="mt-5">
                        <div class="mb-3 text-center">

                            <input type="text" id="idteknisi" name="idteknisi" class="form-control"
                                placeholder="idteknisi" value="<?= $idteknisi ?>">
                        </div>
                        <div class="mb-3 text-center">

                            <input type="text" name="namateknisi" id="namateknisi" class="form-control"
                                placeholder="namateknisi" value="<?= $namateknisi ?>">
                        </div>
                        <div class="mb-3 text-center">

                            <input type="text" name="keahlian" id="keahlian" class="form-control"
                                placeholder="keahlian" value="<?= $keahlian ?>">
                        </div>
                        <div class="mb-3 text-center">

                            <input type="text" name="status" id="status" class="form-control"
                                placeholder="status" value="<?= $status ?>">
                        </div>
                        <div class="mb-3 text-center">
                            <?php if ($isError): ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3 text-center mt-5">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </main>
</body>

</html>