$(document).ready(function(){

    $('#imgLoad').hide();
    $('#imgSuccess').hide();
    $('#imgError').hide();
    $('#note').hide();
	
	$('#postEnquiryForm').bootstrapValidator({
		live: 'enabled',
		message: 'This value is not valid',
		submitButton: '$postContactForm button[type="submit"]',
		submitHandler: function(validator, form, submitButton) {
		$.ajax({
			type: 'POST',
			// url: 'my_form.url',
			data: $(form).serialize(),
			success: function(result) {
				$('#note').show(); 
				$('#loading-image').modal('show');
				$("#postContactForm").data('bootstrapValidator').resetForm();
				$('.resultReloading').html(data);
				return false;
			}
		});
		return false;
		}
	});
	$('#postContactForm').bootstrapValidator({
		live: 'enabled',
		message: 'This value is not valid',
		submitButton: '$postContactForm button[type="submit"]',
		submitHandler: function(validator, form, submitButton) {
		$.ajax({
			type: 'POST',
			// url: 'my_form.url',
			data: $(form).serialize(),
			success: function(result) {
				$('#note').show(); 
				$('#loading-image').modal('show');
				$('.resultReloading').html(data);
				return false;
			}
		});
		return false;
		}
	});
	
	
	
 
});