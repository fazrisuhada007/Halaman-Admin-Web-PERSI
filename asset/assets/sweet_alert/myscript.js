const flashData = $('.flash-data').data('flashdata');

if( flashData) {
	Swal.fire({
		title : 'Data berhasil' ,
		text  : 'Berhasil' + flashData,
		type  : 'Succes'
	});
}