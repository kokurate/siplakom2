
const flashData = $('.flash-data').data('flashdata');

// dpe arti kalo flash data ada isi/ true itu nilai default
// babang sandhika quick tip sweet alert
if(flashData){
    Swal({
        tittle: flashData,
        text : 'Kode Pengaduan Anda Adalah',
        type: 'success'
    })

}