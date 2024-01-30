<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

	$kodejabatan = $_GET['idteknisi'];

	$conn = open_connection();

	$query = "DELETE FROM tb_teknisi WHERE idteknisi = '$idteknisi' ";

	$hasil = mysqli_query($conn, $query);

	if($hasil){
		$url = BASE_URL . 'teknisi/teknisi.php';
            header("Location: $url");
	}else {
		echo "gagal hapus data : " . mysqli_error($conn);

	}

?>
