jQuery(document).ready(function($) {

$(".ajax-contact-form").submit(function() {
	var str = $(this).serialize();
	$.ajax({
		type: "POST",
		url: "js/contact.php",
		data: str,
		success: function(msg) {
			if(msg == 'OK') {
				result = '<p>Ваш отзыв успешно отправлен на модерацию!<br>Спасибо!</p>';
				$(".fields").hide();
			} else {
				result = msg;
			}
			$('.note').html(result).css('display', 'block');
		}
	});
	return false;
	});
});