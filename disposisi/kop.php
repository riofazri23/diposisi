<?php
require_once "../koneksi.php";
require_once "../function.php";
check_login();

$conn = open_connection();

$id = $_SESSION['username'];

$old_data = array();
$query = "SELECT * FROM tb_pengguna WHERE username = '$id'";
$query1 = "SELECT TIMESTAMPDIFF(HOUR, tb_disposisi.created , tb_disposisi.updated) AS HourDiff, TIMESTAMPDIFF(MINUTE, tb_disposisi.created , tb_disposisi.updated) AS MinuteDiff, tb_disposisi.notiket,tb_disposisi.updated,tb_disposisi.created,tb_teknisi.keahlian,tb_teknisi.namateknisi,tb_teknisi.status FROM tb_disposisi INNER JOIN tb_teknisi ON tb_disposisi.idteknisi = tb_teknisi.idteknisi group by tb_teknisi.keahlian order by MinuteDiff ASC";
$hasil = mysqli_query($conn, $query);
$hasil1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($hasil);



// algoritma greedy
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.cover-letter {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

header {
  text-align: center;
}

.sender-info,
.recipient-info {
  margin-top: 20px;
}

.sender-info h2,
.recipient-info h2 {
  color: #333;
}

.letter-content {
  margin-top: 20px;
}

p {
  line-height: 1.6;
}

  </style>
  <title>Greedy</title>
</head>
<body>

  <div class="cover-letter">
    <header>
      <h1>Algoritma Greedy</h1>
      <p>
        <span id="day"></span>
        <span id="date"></span>
        <span id="month"></span>
        <span id="year"></span>
      </p>
    </header>

    <section class="recipient-info">
      <h2>Kalkulasi Pekerjaan</h2>
      <table border="1" style="width: 100%; border: 1px solid black; border-collapse: collapse;">
        <tr align="center">
            <td>No</td>
            <td>Nama Teknisi</td>
            <td>Keahlian</td>
            <td>Waktu Pengerjaan</td>
        </tr>
        
            <?php
                    $a=1;
                while($row1 = mysqli_fetch_assoc($hasil1)){
                    echo"<tr>";
                    echo "<td align='center'>" . $a++ . "</td>";
                    echo "<td>$row1[namateknisi]</td>";
                    echo "<td>$row1[keahlian]</td>";
                    echo "<td>$row1[MinuteDiff] Menit</td>";
                    echo "</tr>";
                }
            ?>
      </table>
    </section>

    <section class="letter-content">
      <p>Dear Hiring Manager,</p>
      <p>I am writing to express my interest in the [position] at [company]. With a strong background in [relevant skills and experiences], I believe that I am a perfect fit for the role.</p>
      <p>[Additional paragraphs highlighting your qualifications and why you are a good fit for the position.]</p>
      <p>I am excited about the opportunity to contribute to [company] and help [specific goals or projects]. Thank you for considering my application. I look forward to the possibility of discussing how my skills and experiences align with your needs.</p>
      <p>Sincerely,<br><?= $row['username'] ?></p>
    </section>
  </div>

</body>
<script>
    function displayDate() {
      const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

      const currentDate = new Date();

      const day = days[currentDate.getDay()];
      const date = currentDate.getDate();
      const month = months[currentDate.getMonth()];
      const year = currentDate.getFullYear();

      document.getElementById('day').innerText = `${day}`;
      document.getElementById('date').innerText = `${date}`;
      document.getElementById('month').innerText = `${month}`;
      document.getElementById('year').innerText = `${year}`;
    }

    // Panggil fungsi untuk menampilkan tanggal saat halaman dimuat
    displayDate();
    window.print();
  </script>
</html>
