<?php
include 'include/koneksi.php';
include 'include/app.php';

$skr = date('Y-m-d');
?>

<!Doctype html>
<html lang="en-US">
	<head>
	
		<!-- ==============================================
		Title and basic Metas
		=============================================== -->
        <meta charset="utf-8">
        <title><?= $app['nama_aplikasi'];?> - <?= $app['nama_perusahaan'];?></title>
		<meta name="description" content="Sistem Absensi Siswa SMP Islam Assholihiyah	”.">
		<meta name="author" content="ThemeArt">
		
		<!-- ==============================================
		Mobile Metas
		=============================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- ==============================================
		Fonts and CSS
		=============================================== -->
		<link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		<link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css1/style.css" rel="stylesheet" type="text/css">
		
		<!-- ==============================================
		JS
		=============================================== -->
		<script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/modernizr.custom.97074.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        
		<!--[if lt IE 9]>
			<script src="js/selectivizr.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <!-- ==============================================
		Favicons
		=============================================== -->
       
        <link rel="shortcut icon" href="images/icon/logogl.jpg">

    </head>
    <body>
		<div class="wrapper">
		<div id="loading"></div>
		
		<div id="ascensor">
			<section class="section home">
				<div class="center-box">
					<div class="container">
					<div class="row">
							<div class="socialize">
								<h2 class="h2"><img src="images/logogl.jpg" width="6%" alt="Image"> <?= $app['nama_aplikasi'];?></h2>
							</div>
						</div>
						<div class="tile">
						</div>
						<div class="tile tile-item tile-client">
							<a class="ascensorLink tile-nav" href="masuk">
								<h5 class="h5">Masuk</h5>
								<i class="fa fa-sign-in fa-4x"></i>
							</a>
						</div>
						<div class="tile tile-item tile-service">
							<a class="ascensorLink  tile-nav" href="pulang">
								<h5 class="h5">Pulang</h5>
								<i class="fa fa-sign-out fa-4x"></i>
							</a>
						</div>
						
						<script type="text/javascript">
							var detik = <?php echo date('s'); ?>;
							var menit = <?php echo date('i'); ?>;
							var jam   = <?php echo date('H'); ?>;
						 
							function clock()
							{
							if (detik!=0 && detik%60==0) {
								menit++;
								detik=0;
							}
							second = detik;
							 
							if (menit!=0 && menit%60==0) {
								jam++;
								menit=0;
							}
							minute = menit;
							 
							if (jam!=0 && jam%24==0) {
								jam=0;
							}
							hour = jam;
							 
							if (detik<10){
								second='0'+detik;
							}
							if (menit<10){
								minute='0'+menit;
							}
							 
							if (jam<10){
								hour='0'+jam;
							}
							waktu = hour+':'+minute+':'+second;
							 
							document.getElementById("clock").innerHTML = waktu;
							detik++;
						}
					 
						setInterval(clock,1000);
						</script>
						<div class="clearfix"> </div>
						<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="about-note">
								
								<p align="center"><h1><div align="center" id="clock"></div></h1></p>
								<p ><h4 align="center"><?php $tanggal = date('d M Y');
								$day = date('D', strtotime($tanggal));
								$dayList = array(
									'Sun' => 'Minggu',
									'Mon' => 'Senin',
									'Tue' => 'Selasa',
									'Wed' => 'Rabu',
									'Thu' => 'Kamis',
									'Fri' => 'Jumat',
									'Sat' => 'Sabtu'
								);
								echo $dayList[$day].", ".$tanggal;?></h4></p>
								<p align="center"><?= $app['nama_perusahaan'];?></p>
							</div>
						</div>
						
					</div>
					<p align="center"><img src="images/botom.webp" width="100%" alt="Image"></p>
				
							
					</div>
				</div>

			</section> <!-- /home -->
			
			<!-- /portfolio -->
			
			<!-- /follow -->
			
		</div> 
		<!-- /ascensor -->
		
		</div> <!-- /wrapper -->
		
		<!-- ==============================================
		JS
		=============================================== -->
		<script src="js/jquery.ascensor.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.mixitup.min.js"></script>
		<script src="js/jquery.hoverdir.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
        <script src="js/main.js"></script>
		

 </body>



<?php 
//ini digunakan supaya terhubung dengan mysql
  include 'koneksi.php';
   session_start();

   
  //untuk menampilkan atau memproses data base di mysql
 $query =  "SELECT * FROM tb_siswa;";
 $sql = mysqli_query($conn, $query);
 $no = 0;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"></script> 
    
    <!-- Font Awesome https://fontawesome.com/v4.7/get-started link untuk mendowloadnya -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 
      <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.css"> 
    <script src="datatables/datatables.js"></script>
      
    <title>belajar_crud</title>
    </head>
<!-- 
     <script type="text/javascript"  >
      new DataTable('#dt');
    </script>  -->
     <script type="text/javascript">
      $(document).ready(function () {
        $('#dt').DataTable();
      });
    </script>  
<body>
  <!-- saya mangubah -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
      </nav>

      <!-- Judul -->
       <!-- mt-4 digunakan untuk memberi jarak kebawah antara content di atas dan content di bawah 4 diatur sesuai dengan kebutuhan ini tanpa css lagi -->
        <!-- atribut container-fluid digunakan untuk menggeser content dari kiri kekanan tanpa css lagi  -->
        <div class="container-fluid"> 
           <h1 class="mt-4">Data Siswa</h1> 
            <figure>
                <blockquote class="blockquote">
                 <p>Berisi data yang telah disimpan di database.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  CRUD <cite title="Source Title">Create Read Update Delete</cite>
                </figcaption>
            </figure>
            <!-- mb-3 juga memberi jarak antar content yang di atas dengan content yang dibawah -->
            <a href="kelola.php" type="button" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i>
                 Tambah Data</a>

               <!-- boostrab -->

               <?php
                if(isset($_SESSION['eksekusi'])):
               ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>
                      <?php
                      echo $_SESSION['eksekusi'];
                      ?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php
                session_destroy();
                endif;
                ?>

              <div class="table-responsive">
                <table id="dt" class="table align-middle table-bordered table-hover">
                  <thead>
                    <tr>
                      <th><center>No.</center></th>
                      <th>NISN</th>
                      <th>Nama Siswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Foto Siswa</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                   <tbody>
                    <?php
                      while ($result = mysqli_fetch_assoc($sql)) {
                      ?>
                      <tr>
                        <td><center>
                          <?php
                          echo ++$no;
                          ?>.
                        </center></td>
                        <td>
                        <?php
                          echo $result['nisn'];
                          ?>
                        </td>
                        <td>
                        <?php
                          echo $result['nama_siswa'];
                          ?>
                        </td>
                        <td>
                        <?php
                          echo $result['jenis_kelamin'];
                          ?>
                        </td>
                        <td>
                         <img src="img/<?php echo $result['foto_siswa']; ?> "style="width: 100px";>
                         </td>
                        <td>
                        <?php
                          echo $result['alamat'];
                          ?>
                        </td>
                        <td>
                            <a href="kelola.php?ubah= <?php echo $result['id_siswa']; ?>"    type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                            <a href="proses.php?hapus= <?php echo $result['id_siswa']; ?> "    type="button" class="btn btn-danger btn-sm" onClick= "return confirm('Apakah anda yakin menghapus nya!!!')"  ><i class="fa fa-trash" aria-hidden="true"></i></a> 
                        </td>
                      </tr>
                       
                    <?php
                      }
                      ?>
                   </tbody>
                   
                  <!-- <tbody>
                    <tr>
                      <td><center>2.</center></td>
                      <td>213145678</td>
                      <td>Adi Ray </td>
                      <td>Laki-laki</td>
                      <td><img src="./img/img2.jpg" alt="gambar" style="width: 100px;"></td>
                      <td>Jl. bandung</td>
                      <td>
                          <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                          <a href="proses.php?hapus=2"    type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                     </tr>
                 </tbody> -->
                 
                </table>
            </div>
        </div>
<div class="mb-5">

</div>
</body>
</html>