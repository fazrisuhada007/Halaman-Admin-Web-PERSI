const flashData = $('.flash-data').data('flashdata');

if  (flashData) {
	Swal.fire({
		title: 'Data berhasil ditambahkan' + flashData,
		text : 'Berhasil' + flashData,
		type : 'success'
	});
}