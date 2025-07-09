<div class="container mt-3">

     <div class="row">

     </div>
     
        <div class="col-lg-6">

           <?php Flasher::flash(); ?>

        </div>

        <div class="row">

            <div class="col-lg-6 mb-3">

                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data Mahasiswa
                </button>

        </div>

        <div class="row mb-3">

            <div class="col-lg-6 ">

               <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">

                    <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" autocomplete="off" id="keyword">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>

               </form>

            </div>

        </div>

    <div class="row">

         <div class="col-lg-6">

             <h2>Daftar Mahasiswa</h2>

                <ul class="list-group">
                        <?php foreach( $data['mhs'] as $mhs) : ?>

                            <li class="list-group-item d-flex justify-content-between align-items-center" ><?= $mhs['nama'] ; ?> 

                                <span>
                                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill bg-primary text-white text-decoration-none me-2 ">detail</a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge rounded-pill bg-warning text-white text-decoration-none me-2 float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>" >ubah</a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge rounded-pill bg-danger text-white text-decoration-none" onclick="return confirm('yakin mau hapus ?')" >hapus</a>
                                </span>

                            </li>

                        <?php endforeach; ?>
                </ul>
             
        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">
                 
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                <input type="hidden" name="id" id="id" >

                <div class="form-group">

                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">

                </div>

                <div class="form-group">

                    <label for="npm">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm">

                </div>

                <div class="form-group">

                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">

                </div>

                <div class="form-select" >
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Ekonomi">Teknik Ekonomi</option>
                   </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>

        </div>
            
    </div>

</div>