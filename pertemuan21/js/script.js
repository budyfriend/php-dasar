$(document).ready(function () {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // membuat event ketika keyword ditulis
    $('#keyword').on('keyup', function () {
        // munculkan icon loading
        $('.loader').show();
        // load buat GET / ajax menggunakan load
        // $('#bungkus').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
            $('#bungkus').html(data);
            $('.loader').hide();
        });
    });
});