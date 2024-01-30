<?php
require_once "../function.php";
check_login();
?>
<!DOCTYPE html>
<html>

<head>
	<title>FORM ADMIN</title>
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
				<div class="col-sm-6 align-self-start">
					<a href="form_pengguna.php" class="btn btn-primary my-3 " style="width: 30%;">Tambah</a>

				</div>
				<div class="col-sm-12">

					<table id="myTable" class="table table-striped text-center bg-light display" style="border: 1;padding: 10px;">
						<tr>
							<td>NO</td>
							<td>ID PENGGUNA</td>
							<td>NAMA LENGKAP</td>
							<td>USERNAME</td>
							<td>PASSWORD</td>
							<td>LEVEL</td>
							<td>ACTION</td>
						</tr>
						<?php
						require_once "../koneksi.php";
						$conn = open_connection();

						$query = "SELECT idpengguna, nama, username, password, level FROM tb_pengguna";
						$hasil = mysqli_query($conn, $query);
						
						$i = 1;
						while ($row = mysqli_fetch_assoc($hasil)) {
							echo "<tr>";
							echo "<td>" . $i++ . "</td>";
							echo "<td>$row[idpengguna]</td>";
							echo "<td>$row[nama]</td>";
							echo "<td>$row[username]</td>";
							echo "<td>$row[password]</td>";
							echo "<td>$row[level]</td>";
							echo "<td><a class='btn btn-primary btn-sm' href='form_pengguna_edit.php?idpengguna=$row[idpengguna]'>EDIT</a>
		  <a class='btn btn-danger btn-sm' href='action_hapus_datapengguna.php?idpengguna=$row[idpengguna]'>HAPUS</a></td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
	</main>
	</nav>

</body>

</html>