<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

$conn = open_connection();
$id = $_GET['id'];


$query = "UPDATE tb_disposisi SET updated = NOW() WHERE notiket='$id'";

$hasil = mysqli_query($conn, $query);

echo '<script>window.location.replace("http://localhost/I-APP/disposisi/data_disposisi.php");</script>';

?>