$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
         $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $(document).on('click', '.tampilModalUbah', function() {

        $('#formModalLabel').html('Ubah Data Mahasiswa');

        $('.modal-footer button[type=submit]').html('Ubah Data');

        $('.modal-body form').attr('action', 'http://localhost/BelajarMVC-1/public/Mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({

          url: 'http://localhost/BelajarMVC-1/public/Mahasiswa/getubah',
          data: {id : id},
          method: 'post',
          dataType: 'json',
          success: function(data) {

            $('#nama').val(data.nama);
            $('#npm').val(data.npm);
            $('#email').val(data.email);
            $('#jurusan').val(data.jurusan);
            $('#id').val(data.id);

          }
        })

    });
});
