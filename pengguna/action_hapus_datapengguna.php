<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

	$idpengguna = $_GET['idpengguna'];

	$conn = open_connection();

	$query = "DELETE FROM tb_pengguna WHERE idpengguna = '$idpengguna' ";

	$hasil = mysqli_query($conn, $query);

	if($hasil){
		$url = BASE_URL . 'pengguna/pengguna.php';
            header("Location: $url");
	}else {
		echo "gagal hapus data : " . mysqli_error($conn);

	}

?>
