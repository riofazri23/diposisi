<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

	$notiket = $_GET['notiket'];

	$conn = open_connection();

	$query = "DELETE FROM tb_disposisi WHERE notiket = '$notiket' ";

	$hasil = mysqli_query($conn, $query);

	if($hasil){
		$url = BASE_URL . 'disposisi/disposisi.php';
            header("Location: $url");
	}else {
		echo "gagal hapus data : " . mysqli_error($conn);

	}

?>
