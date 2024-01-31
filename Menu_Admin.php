<?php
require_once "function.php";
check_login();

require_once "koneksi.php";
$conn = open_connection();
$queryTugasSelesai = "SELECT COUNT(notiket) as tugasSelesai from tb_disposisi where updated IS NOT NULL";
$queryTugasBerlangsung = "SELECT COUNT(notiket) as tugasBerlangsung from tb_disposisi where updated IS NULL";
$queryTotalTeknisi = "SELECT COUNT(idteknisi) as totalTeknisi from tb_teknisi";
$hasilTugasSelesai = mysqli_query($conn, $queryTugasSelesai);
$hasilTugasBerlangsung = mysqli_query($conn, $queryTugasBerlangsung);
$hasilTotalTeknisi = mysqli_query($conn, $queryTotalTeknisi);
$selesai = mysqli_fetch_assoc($hasilTugasSelesai);
$berlangsung = mysqli_fetch_assoc($hasilTugasBerlangsung);
$teknisi = mysqli_fetch_assoc($hasilTotalTeknisi);

?>

<!--*******************
Preloader start
********************-->
<div id="preloader">
	<div class="loader">
		<svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
		</svg>
	</div>
</div>
<!--*******************
Preloader end
********************-->


<!--**********************************
Main wrapper start
***********************************-->
<div id="main-wrapper">
	
	<?php include "navbar.php"; ?>
                

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Tugas Berlangsung</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $berlangsung['tugasBerlangsung'] ?></h2>
                                    <p class="text-white mb-0">Jan - Des 2024</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa-solid fa-triangle-exclamation"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Tugas Selesai</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"> <?= $selesai['tugasSelesai'] ?></h2>
                                    <p class="text-white mb-0">Jan - Des 2024</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa-solid fa-clipboard-list"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Teknisi</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?= $teknisi['totalTeknisi'] ?></h2>
                                    <p class="text-white mb-0">Jan - Des 2024</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Diagram Waktu Penyelesaian Tugas</h4>
                                            <p>Total Waktu</p>
                                            <h3 class="m-0">Menit</h3>
                                        </div>
                                        <!-- <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_2"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="w-100 mr-2">
                                                <h6>Pixel 2</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-danger" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-100">
                                                <h6>iPhone X</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
