$(document).ready(function(){

    $('#imgLoad').hide();
    $('#imgSuccess').hide();
    $('#imgError').hide();
    $('#note').hide();
	
	$('#postEnquiryForm').bootstrapValidator();
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
				// $("#facts_tbody").append(result);
				// $("#key").val('');
				// $("#value").val('');
				// $("#postContactForm").data('bootstrapValidator').resetForm();
				$('.resultReloading').html(data);
				return false;
			}
		});
		return false;
		}
	});
	
	$('#postEnquiryForm').submit(function(){

		var frm = $("#postEnquiryForm");
		var data = frm.serializeArray();
	
        $.ajax({
            type: "POST"
            // , url: url
            , data: data
            , dataType: "html"
            , success: function(data){ $('#note').show(); $('#loading-image').modal('show'); /* alert('ทีมงานจะติดต่อกลับโดยเร็วที่สุด'); location.reload(); */}
            , error: function(data){ alert('ไม่สามารถส่งข้อมูลการติดต่อได้ใน ขณะ นี้'); }
            //, complete: function(data){ location.reload(); }
        });
		
		return false;
	});

    // $('#postContactForm').submit(function(){
		// var frm = $("#postContactForm");
		// var data = frm.serializeArray();
	
        // $.ajax({
            // type: "POST"
            // // , url: url
            // , data: data
            // , dataType: "html"
            // , success: function(data){ $('#note').show(); $('#loading-image').modal('show'); /* alert('ทีมงานจะติดต่อกลับโดยเร็วที่สุด'); location.reload(); $("#postContactForm").data('bootstrapValidator').resetForm();*/}
            // , error: function(data){ alert('ไม่สามารถส่งข้อมูลการติดต่อได้ใน ขณะ นี้'); }
            // //, complete: function(data){ location.reload(); }
        // });
		
		// return false;
	// });
	
	
	
 
});