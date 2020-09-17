const flashData = $('.flash-data').data('flashdata');
const sukses = $('.sukses').data('sukses');
const waktu = $('.waktu').data('waktu');

if (flashData) {
    Swal.fire({
        title: 'Masuk Gagal ',
        text: flashData,
        icon: 'error'
    })
}
if (sukses) {
    Swal.fire({
        title: 'Input Berhasil',
        text: sukses,
        icon: 'success'
    })
}
if (waktu) {
    Swal.fire({
        title: 'Pendaftaran Berakhir !',
        html: waktu + '<br>Terimakasih telah mendaftar',
        icon: 'info'
    }).then(function() {
        // Redirect the user
        window.location.href = 'http://yapindo.co.id/tryout';
    });
}