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
<html>

<head>
    <title>FORM INPUT TEKNISI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include "../navbar.php"; ?>
    <main>
        <table align="center">
            <tr>
                <td>
                    <?php if ($isError) : ?>
                        <div class="alert alert-dark" role="alert">
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="idteknisi" class="form-label">ID Teknisi</label>
                            <input type="text" id="idteknisi" name="idteknisi" class="form-control" placeholder="id teknisi" value="<?= $idteknisi ?>"readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Teknisi</label>
                            <input type="text" name="namateknisi" id="nama" class="form-control" placeholder="nama teknisi" value="<?= $namateknisi ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="keahlian" class="form-label">Keahlian</label>
                            <input type="text" name="keahlian" id="keahlian" class="form-control" placeholder="keahlian" value="<?= $keahlian ?>">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" id="status" class="form-control" placeholder="status" value="<?= $status ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </td>
            </tr>
        </table>
    </main>
</body>

</html>
