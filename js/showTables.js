$(document).ready(function() {

	$('#seePreviousYear').on('click', function() {

		if( !($(this)).hasClass('on_2016')) {
			$('.table_2017').hide();
			$('.table_2016').show();
			$('#seePreviousYear').html('View 2017 guest speakers >>').addClass('on_2016');
			return false;
		} else {
			$('.table_2016').hide();
			$('.table_2017').show();
			$('#seePreviousYear').html('<< View 2016 guest speakers').removeClass('on_2016');
			return false;
		}
	});

});
