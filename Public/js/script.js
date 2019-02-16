$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('#id').val('');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.formMantul form').attr('action','http://localhost/native_MVC/Public/mahasiswa/tambah')
    })

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.formMantul form').attr('action','http://localhost/native_MVC/Public/mahasiswa/ubah')


        const id  = $(this).data('id');
        
        $.ajax({
            url : 'http://localhost/native_MVC/Public/mahasiswa/getubah',
            data : {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                console.log(data);
            }
        });
    })
});