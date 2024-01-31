<?php
require_once "../function.php";
check_login();
?>
<!DOCTYPE html>
<html>

<head>
	<title>LAPORAN KARYAWAN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

</head>

<body>
	<?php include "../navbar.php"; ?>


	</div>
	<main class="my-5 ">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h3 class="text-center mb-4">Laporan Data Karyawan</h3>
					<table class="table table-striped text-center bg-light" style="border: 1;padding: 10px;">

						<tr>
							<td>NO</td>
							<td>NAMA KARYAWAN</td>
							<td>ALAMAT</td>
							<td>NO TELEPON</td>
							<td>KODE KARYAWAN</td>
							<td>NAMA JABATAN</td>
							<td>GAJI POKOK</td>
							<td>UANG MAKAN</td>
							<td>TUNJANGAN BPJS</td>
							<td>TOTAL GAJI</td>
							<!-- <td colspan="3">ACTION</td> -->
						</tr>
						<?php
						require_once "../koneksi.php";
						$conn = open_connection();

						$query = "SELECT namakaryawan, alamat, notlp, kodekaryawan, namajabatan, gajipokok, uangmakan, tunjanganbpjs, totalgaji FROM tb_karyawan";
						$hasil = mysqli_query($conn, $query);
						$i = 1;
						while ($row = mysqli_fetch_assoc($hasil)) {
							echo "<tr>";
							echo "<td>" . $i++ . "</td>";
							echo "<td>$row[namakaryawan]</td>";
							echo "<td>$row[alamat]</td>";
							echo "<td>$row[notlp]</td>";
							echo "<td>$row[kodekaryawan]</td>";
							echo "<td>$row[namajabatan]</td>";
							echo "<td>$row[gajipokok]</td>";
							echo "<td>$row[uangmakan]</td>";
							echo "<td>$row[tunjanganbpjs]</td>";
							echo "<td>$row[totalgaji]</td>";
							// echo "<td><a class='btn btn-primary btn-sm' href='form_karyawan_edit.php?kodekaryawan=$row[kodekaryawan]'>EDIT</a></td>
                            //       <td><a class='btn btn-danger btn-sm' href='action_hapus_dataKaryawan.php?kodekaryawan=$row[kodekaryawan]'>HAPUS</a></td>
                            //       <td><a class='btn btn-success btn-sm' href=''>cetak</a></td>";
							// echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</main>
	</nav>
</body>

</html>
