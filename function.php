<?php

session_start();
define('BASE_URL', "http://localhost/I-APP/");
//define('BASE_URL', "https://itransplus.000webhostapp.com/");

function check_login() {
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit();
	}
}


function get_data_teknisi()
{
    require_once "koneksi.php";

    $conn = open_connection();

    $query = "SELECT * FROM tb_teknisi";// Mengambil hanya kolom keahlian

    $hasil = mysqli_query($conn, $query);

    $list = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $list[$row['idteknisi']] = $row['keahlian']; // Menambahkan keahlian ke dalam array
    }

   

    return $list;
}

function get_data_notiket($notiket)
{
    $conn = open_connection();
    $query = "SELECT * FROM tb_disposisi WHERE notiket = '$notiket'";
    $result = mysqli_query($conn, $query);
    // $namateknisi = null; // Initialize the variable

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $notiket = $row['notiket'];
    }

    mysqli_close($conn);
    return $notiket;
}

function get_nama_teknisi($teknisi)
{
    $conn = open_connection();
    $query = "SELECT namateknisi FROM tb_teknisi WHERE idteknisi = '$teknisi'";
    $result = mysqli_query($conn, $query);
    $namateknisi = null; // Initialize the variable

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $namateknisi = $row['namateknisi'];
    }

    mysqli_close($conn);
    return $namateknisi;
}

function get_status($teknisi)
{
    $conn = open_connection();
    $query = "SELECT status FROM tb_teknisi WHERE idteknisi = '$teknisi'";
    $result = mysqli_query($conn, $query);
    $status = null; // Initialize the variable

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $status = $row['status'];
    }

    mysqli_close($conn);
    return $status;
}

function get_idteknisi($teknisi)
{
    $conn = open_connection();
    $query = "SELECT idteknisi FROM tb_teknisi WHERE idteknisi = '$teknisi'";
    $result = mysqli_query($conn, $query);
    $status = null; // Initialize the variable

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $idteknisi = $row['idteknisi'];
    }

    mysqli_close($conn);
    return $idteknisi;
}

function get_tunjangan_bpjs_by_jabatan($jabatan)
{
     $conn = open_connection();
    $query = "SELECT tunjanganbpjs FROM tb_jabatan WHERE namajabatan = '$jabatan'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $tunjanganbpjs = $row['tunjanganbpjs'];
    mysqli_close($conn);

    return $tunjanganbpjs;
}


function get_data_admin(){
	require_once "koneksi.php";
	$conn = open_connection();

	$query = "SELECT idpenguna, nama, username, password  FROM tb_pengguna";
	$hasil = mysqli_query($conn, $query);

	$list = array();
	while($row = mysqli_fetch_assoc($hasil)){
		$list[ $row['idpengguna'] ] = $row['nama'] = $row['username'] = $row['password'];
	}
	return $list;


	
}

