<?php

function open_connection(){

	$host = "localhost";
	$username = "root";
	$pass	= "";
	$dbname = "db_iapp_2";
	//$username = "admin";
	//$pass	= "Qwerty421!";
	//$dbname = "id20989791_db_gaji_karyawan";

	$koneksi = mysqli_connect($host, $username, $pass, $dbname);

	if(mysqli_connect_errno()){
		die("Gagal melakukan koneksi ke MYSQL :" . mysqli_connect_error());
	}
	
	return $koneksi;
}

?>