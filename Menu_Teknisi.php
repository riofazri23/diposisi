<?php
require_once "function.php";
check_login();
?>
<!DOCTYPE html>
<html>

<head>
	<title>HOME</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>

</head>

<body>
	<?php include "navbar_teknisi.php"; ?>
	<div class="container">
		<table>
			<tr>
				<td></td>
			</tr>
			<div class="row">
				<div class="col">
					<?php include "slide_show.php"; ?>
				</div>
			</div>
	</div>

</body>

</html>