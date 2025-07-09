<!DOCTYPE html>
<!-- PHP MENGGUNAKAN LEBIH BANYAK QUERY -->

 <?php
     include 'koneksi.php';
     session_start();


     $id_siswa = '';
      $nisn = '';
      $nama_siswa = '';
      $jenis_kelamin = '';
      $alamat = '';

      if(isset($_GET['ubah'])) {
      $id_siswa = $_GET['ubah'];
      $query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
       $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);

      $nisn = $result['nisn'];
      $nama_siswa = $result['nama_siswa'];
      $jenis_kelamin = $result['jenis_kelamin'];
      $alamat = $result['alamat'];

      // var_dump($result);

      // die();
    }
  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"></script> 
    
    <!-- Font Awesome/icon https://fontawesome.com/v4.7/get-started link untuk mendowloadnya -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <title>belajar_crud</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
    </nav>

      <div class="container">
        <form method="POST" action="proses.php" enctype = "multipart/form-data">
          <input type="hidden" value="<?php echo $id_siswa; ?>" name="id_siswa">
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
              <input required  type="text" name ="nisn" class="form-control" id="nisn" placeholder="Ex: 24313546" value="<?php echo $nisn ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-10">
              <input required type="text" name="nama_siswa" class="form-control" id="nisn" placeholder="Ex: Andi Silaban" value="<?php echo $nama_siswa ?>" >
            </div>
          </div>
          <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select  required id="jkel"  name="jenis_kelamin" class="form-select">
                    <option <?php if($jenis_kelamin == 'Laki-laki'){ echo "selected";}  ?> value="Laki-laki">Laki-laki</option>
                    <option  <?php if($jenis_kelamin == 'Perempuan'){ echo "selected";}  ?>  value="Perempuan" >Perempuan</option>
                    <option  <?php if($jenis_kelamin == 'LGBT'){ echo "selected";}  ?>  value="LGBT" >LGBT</option>
                </select>
              </div>
          </div>

          <div class="mb-3 row">
             <label for="foto_siswa" class="col-sm-2 col-form-label">Foto Siswa</label>
            <div class="col-sm-10">
               <input <?php if(!isset($_GET['ubah'])) echo " required"; ?>class="form-control" type="file" name="foto" id="foto" accept= "image/*">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="Alamat Lengkap"class="col-sm-2 col-form-label">Alamat Lengkap</label>
            <div class="col-sm-10">
               <textarea required class="form-control" id="Alamat Lengkap" rows="3" placeholder="JL.Jakarta" name="alamat"><?php echo $alamat ?></textarea>
            </div>
          </div>
        
                <!-- nilai artibut col digunakan untuk menyesuaikan kolom tanpa css -->
              <div class="mb-3 row mt-4">
                <div class="col">

                <?php
                if(isset($_GET['ubah'])) {

                  ?>
                  <!-- ini perlu harus di pelajari if pada PHP-->
                  
                   <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i>
                       Simpan Perubahan
                    </button>
                    <?php
                    } else {
                     ?>
                   <button type="submit" name="aksi" value="add" class="btn btn-primary">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i>
                       Tambahkan
                    </button> 
                    <?php
                    }
                     ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                      <!-- back digunakan untuk terhubung ke halaman lain secara menggeser -->
                      <i class="fa fa-fast-backward" aria-hidden="true"></i>
                       Batal
                  </a>
                </div>
              </div>
          </div>
        </form>
      </div>
        
</body>
</html>

