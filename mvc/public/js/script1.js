// $(function() {

//     $('.tombolTambahData').on('click',function() {
//         $$('#exampleModalLabel').html('Tambah Data Siswa');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#nama').val('');
//         $('#jenis_kelamin').val('');
//         $('#alamat').val('');
//         $('#id').val('');
//     })

//     $('.tampilModalUbah').on('click', function() {

//         $('#exampleModalLabel').html('Ubah Data Siswa');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/data_siswa/ubah');

//         const id = $(this).data('id');

//         $.ajax({
//             url: 'http://localhost:8080/mvc/public/data_siswa/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama').val(data.nama);
//                 $('#jenis_kelamin').val(data.jenis_kelamin);
//                 $('#alamat').val(data.alamat);
//                 $('#id').val(data.id);
//             }
//         });
//     });
// });


// //Guru
// $(function() {

//     $('.tombolTambahData').on('click',function() {
//         $$('#ModalGuruLabel').html('Tambah Data Guru');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#nama').val('');
//         $('#komli').val('');
//         $('#alamat').val('');
//         $('#id').val('');
//     })

//     $('.tampilModalUbah').on('click', function() {

//         $('#ModalGuruLabel').html('Ubah Data Guru');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/blog/ubah');

//         const id = $(this).data('id');

//         $.ajax({
//             url: 'http://localhost:8080/mvc/public/blog/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama').val(data.nama);
//                 $('#komli').val(data.komli);
//                 $('#alamat').val(data.alamat);
//                 $('#id').val(data.id);
//             }
//         });
//     });
// });


// //Komli
// $(function() {

//     $('.tombolTambahData').on('click',function() {
//         $$('#ModalKomliLabel').html('Tambah Data Komli');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#komli').val('');
//         $('#id').val('');
//     })

//     $('.tampilModalUbah').on('click', function() {

//         $('#ModalKomliLabel').html('Ubah Data Komli');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/komli/ubah');

//         const id = $(this).data('id');

//         $.ajax({
//             url: 'http://localhost:8080/mvc/public/komli/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#komli').val(data.komli);
//                 $('#id').val(data.id);
//             }
//         });
//     });
// });