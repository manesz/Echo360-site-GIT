<style>
    .panel-default{
        border-color: #fff;
    }
    .panel-default > .panel-heading{
        color: #333;
        background-color: #fff;
        border-bottom: #999;
    }
    .panel-group{
        margin-bottom: 10px;
    }
	// has-success .form-control { border-color: #3c763d; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075); box-shadow: inset 0 1px 1px rgba(0,0,0,.075); }
	// .has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline{ color: red; }
	// .has-error .form-control{border-style:solid;border-color: #b94a48;}
	// .has-error .form-control:focus{border-style:solid;border-color: red;}
	i.form-control-feedback.glyphicon.glyphicon-remove {padding-right: 20px;}
	i.form-control-feedback.glyphicon.glyphicon-ok {padding-right: 20px; color: #42763D}
</style>


<div id="wrapper-content" class="col-lg-12 clearfix" style="background: #fff; padding: 10px; padding-top: 20px; margin-bottom: 10px;">

    <header class="article-header"> <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3> </header>
    <div style="margin-bottom: 20px;"><?php the_breadcrumb(); ?><hr style="border-color: #EE7D00; margin: 10px 0 10px"/></div>
	
    <?php the_content(); ?>

    <div class='row'>
        <div class='col-lg-12 margin-bottom-10' style='height: auto;'>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-Enquiry-Form">
                                <i class="glyphicon glyphicon-envelope" style="color: #EF7D00; "></i>
								<strong style="color: #EE7D00;">Enquiry Form</strong>
                                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                            </a>
                        </h4>
                    </div><!-- END: .panel-heading -->
                    <div id="collapse-Enquiry-Form" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <!-- <form id="postEnquiryForm" name="postEnquiryForm" method="POST"> -->
                            <form id="postEnquiryForm" 
								name="postEnquiryForm"
								data-bv-message="This value is not valid"
								data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
								data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
								data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
							>
                                <h4>Freebie Service ( บริการที่คุณสนใจ - เลือกได้มากกว่า 1 ข้อ )</h4>
                                <div class="col-lg-6">
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Voice Ads (โฆษณา) ">Voice Ads (โฆษณา) </label> </div>
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Voice Ads + SMS (โฆษณา + SMS)" >Voice Ads + SMS (โฆษณา + SMS)</label> </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Market Research ( แบบสอบถาม / วิจัยตลาด ) " >Market Research ( แบบสอบถาม / วิจัยตลาด )</label> </div>
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Other ( อื่น ๆ )" >Other ( อื่น ๆ )</label> </div>
                                </div>
                                <div class="clearfix"></div>
                                <h4 style="margin-top: 30px; ">Contact Details ( ข้อมูลติดต่อกลับ) </h4>
								
                                <div class="col-lg-6 form-group" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Brand/Product:<br/><span style="font-size: 12px; color #aaa;">แบรนด์/สินค้า</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<input type="text" 
											id="inquiryBrand" 
											name="inquiryBrand" 
											class="form-control" 
											style="width: 100%; padding: 10px; border-radius: 0px;"
											data-bv-notempty="true" 
											data-bv-notempty-message="The brand is required"
										/>
									</div>
                                </div>
                                <div class="col-lg-6 form-group" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Company:<br/><span style="font-size: 12px; color #aaa;">บริษัท</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<input type="text" 
											id="inquiryCompany" 
											name="inquiryCompany" 
											class="form-control" 
											style="width: 100%; padding: 10px; border-radius: 0px;"
											data-bv-notempty="true" 
											data-bv-notempty-message="The company is required"
										/>
									</div>
                                </div>
                                <div class="col-lg-6 form-group" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Name:<br/><span style="font-size: 12px; color #aaa;">ชื่อผู้ติดต่อ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<input type="text" 
											id="inquiryName" 
											name="inquiryName" 
											class="form-control" 
											style="width: 100%; padding: 10px; border-radius: 0px;"
											data-bv-notempty="true" 
											data-bv-notempty-message="The company is required"
										/>
									</div>
                                </div>
                                <div class="col-lg-6 form-group" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Email:<br/><span style="font-size: 12px; color #aaa;">อีเมล์</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<input type="text" 
											id="inquiryEmail" 
											name="inquiryEmail" 
											class="form-control" 
											style="width: 100%; padding: 10px; border-radius: 0px;"
											data-bv-notempty="true" 
											data-bv-notempty-message="The company is required"
											data-bv-emailaddress="true"
											data-bv-emailaddress-message="The input is not a valid email address"
										/>
									</div>
                                </div>
                                <div class="col-lg-6 form-group" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Phone Number:<br/><span style="font-size: 12px; color #aaa;">เบอร์ติดต่อกลับ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<input type="text" 
											id="inquiryMobile" 
											name="inquiryMobile" 
											class="form-control" 
											style="width: 100%; padding: 10px; border-radius: 0px; "
											data-bv-notempty="true" 
											data-bv-notempty-message="The company is required"
											data-bv-regexp="true"
											data-bv-regexp-regexp="^[0-9]+$"
											data-bv-regexp-message="The mobile number can only number"
											data-bv-stringlength="true"
											data-bv-stringlength-min="8"
											data-bv-stringlength-max="10"
										/>
									</div>
                                </div>
								<div class="col-lg-6" style="padding-left: 0px !important; margin-bottom: 20px;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Message:<br/><span style="font-size: 12px; color #aaa;">อื่น ๆ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;">
										<textarea id="inquiryRemark" name="inquiryRemark" class="form-control" style="width: 100%; padding: 10px; border-radius: 0px;"></textarea>
									</div>
                                </div>
								
								<p style="padding-left: 0px !important;">or Call Us : 02-314-1528 (K.Ann), Email : sales@echo-360.com</p>
								
                                <div class="col-lg-12">
									
                                    <hr class="clearfix"/>
									<input type="hidden" name="action" value="send_enquiry_form"/>
									
                                    <!--<button type="submit" id="submitPostEnquiryForm" class="btn btn-success btn-lg col-lg-4" data-toggle="modal" data-target="#loading-image" style="float: right;">Submit</button><!-- data-toggle="modal" data-target="#loading-image"  -->
                                    <button type="submit" id="submitPostEnquiryForm" class="btn btn-lg col-lg-4" style="float: right; background: #EE7D00; color: #fff;">Submit</button><!-- data-toggle="modal" data-target="#loading-image"  -->
                                    <button type="reset" class="" style="color: #333; float: right; border: none; background: none; padding: 15px 30px;">reset</button>
                                </div>
								
                            </form>
							

                        </div>
                    </div><!-- END: .panel-collapse .collapse .in -->
                </div><!-- END: .panel .panel-default -->
            </div><!-- END: #accordion .panel-group -->
        </div><!-- END: col-lg-12 -->
    </div><!-- END: row -->
	
	<!-- Modal -->
	<div id="loading-image" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body" style="text-align: center;">
					<p>
						<!-- <img id="imgLoad" src="http://www.echo-360.com/wp-content/uploads/2014/09/loading.gif"/>
						<img id="imgSuccess" src="http://www.echo-360.com/wp-content/uploads/2014/09/success.png"/>
						<img id="imgError" src="http://www.echo-360.com/wp-content/uploads/2014/09/error.png"/> -->
						<p id="note">
							Thank you for your enquiry. Our sales team will contact you back as soon as possible.<br/><br/>
							ขอขอบคุณสำหรับข้อมูลของท่าน ทีมงานของเราจะติดต่อกลับไปโดยเร็วที่สุด
						</p>
						
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-lg-12" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div><!-- END: #loading-image .modal -->

</div><!-- END: col-lg-12 -->

<?php 
	if( isset($_POST['action']) && $_POST['action'] == 'send_enquiry_form' ):
		do_action('post_mail');
	endif;
?>