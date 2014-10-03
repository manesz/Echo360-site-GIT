$(document).ready(function(){

    $('#imgLoad').hide();
    $('#imgSuccess').hide();
    $('#imgError').hide();
    $('#note').hide();

    $('#submitPostEnquiryForm').click(function(){

        $('#imgLoad').show();
        $('#imgSuccess').hide();
        $('#imgError').hide();
        $('#note').hide();

        var url = 'sendmail.php';
        var frm = $("#postEnquiryForm");
        var data = frm.serializeArray();

        $.ajax({
            type: "POST"
            , url: url
            , data: data
            , dataType: "html"
            , success: function(data){ $('#imgLoad').hide(); $('#imgSuccess').show(); $('#note').show(); }
            //, complete: function(){ $('#loading-image').hide(); $('.modal-backdrop').hide(); }
        });

    });
});