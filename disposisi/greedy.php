<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table id="example" border="0" >
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>NO TIKET</td>
                            <td>KEAHLIAN</td>
                            <td>NAMA TEKNISI</td>
                            <td colspan="2">WAKTU PENGERJAAN</td>
                            <!-- <td>STATUS</td> -->
                        </tr>
                    </thead>    
                    <tbody>
                        <?php
                        require_once "../koneksi.php";
                        $conn = open_connection();

                        $query = "SELECT TIMESTAMPDIFF(HOUR, tb_disposisi.created , tb_disposisi.updated) AS HourDiff, TIMESTAMPDIFF(MINUTE, tb_disposisi.created , tb_disposisi.updated) AS MinuteDiff, tb_disposisi.notiket,tb_disposisi.updated,tb_disposisi.created,tb_teknisi.keahlian,tb_teknisi.namateknisi,tb_teknisi.status FROM tb_disposisi INNER JOIN tb_teknisi ON tb_disposisi.idteknisi = tb_teknisi.idteknisi order by MinuteDiff ASC";
                        $hasil = mysqli_query($conn, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($hasil)) {
        


                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>$row[notiket]</td>";
                            echo "<td>$row[keahlian]</td>";
                            echo "<td>$row[namateknisi]</td>";

							 // 'Selisih waktu: '
							 // $diff->y . ' tahun, ';
							 // $diff->m . ' bulan, ';
							 // $diff->d . ' hari, ';
							 // $diff->h . ' jam, ';
							 // $diff->i . ' menit, ';
							 // $diff->s . ' detik, ';
								echo "<td>$row[HourDiff] Jam</td>";
								echo "<td>$row[MinuteDiff] Menit</td>";
                            // echo "<td>$row[status]</td>";
                            
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
</body>
</html>
