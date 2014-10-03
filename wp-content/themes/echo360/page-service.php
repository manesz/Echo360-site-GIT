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
</style>

<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div id="wrapper-content" class="col-lg-12 clearfix" style="background: #fff; padding: 10px; padding-top: 20px; margin-bottom: 10px;">

    <header class="article-header"> <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3> </header>
    <div style="margin-bottom: 20px;"><?php the_breadcrumb(); ?><hr style="border-color: #EE7D00; margin: 10px 0 10px"/></div>

	<?php 
		// $action = @$_POST['action'];
		// if(!empty($action)): 
		
			// echo "<h1>sendmail successful</h1>";
		
			// $email_to = "w.satitnimankan@echo-360.com";
			// // $email_to = "j.thanasitthipan@echo-360.com";
			// $email_title = "Echo 360 Iquiry From";
			// // $email_headers[] = 'From: Wararit Satitnimankan <manesz13@gmail.com>';
			// // $email_headers[] = "Cc: P'Max <j.thanasitthipan@echo-360.com>";
			// // $email_headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address
			// $email_message = file_get_contents(get_template_directory_uri()."/library/mail-template.html");
			
			// $service = '';
			
			// foreach(@$_POST['service'] as $key=>$value):
				// $service .= $value.',';
			// endforeach;
			
			// $email_message = str_replace('{{title}}', @$_POST['title'], $email_message);//replaceTitle
			// $email_message = str_replace('{{date}}', date('Y M d H:i:s'), $email_message);//replaceDate
			// $email_message = str_replace('{{service}}', $service, $email_message);//replaceService
			// $email_message = str_replace('{{company}}', @$_POST['company'], $email_message);//replaceCompany
			// $email_message = str_replace('{{brand}}', @$_POST['brand'], $email_message);//replaceBrand
			// $email_message = str_replace('{{name}}', @$_POST['name'], $email_message);//replaceName
			// $email_message = str_replace('{{email}}', @$_POST['email'], $email_message);//replaceEmail
			// $email_message = str_replace('{{mobile}}', @$_POST['mobile'], $email_message);//replaceMobileNumber
			
			// function set_html_content_type() { return 'text/html'; }
			
			// add_filter( 'wp_mail_content_type', 'set_html_content_type' );

			// wp_mail( $email_to, $email_title, $email_message );

			// remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
				
		// endif;
	?>
	
    <?php the_content(); ?>

    <div class='row'>
        <div class='col-lg-12 margin-bottom-10' style='height: auto;'>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse0">
                                <strong>Enquiry Form</strong>
                                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                            </a>
                        </h4>
                    </div><!-- END: .panel-heading -->
                    <div id="collapse0" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <form method="post">
                                <h4>Freebie Service</h4>
                                <div class="col-lg-6">
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="โฆษณา"> โฆษณา </label> </div>
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="โฆษณา + SMS" >โฆษณา + SMS </label> </div>
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="MR" >MR </label> </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Short voice survey" >Short voice survey </label> </div>
                                    <div class="checkbox"> <label> <input name="inquiryService[]" type="checkbox" value="Other" >Other </label> </div>
                                </div>
                                <div class="clearfix"></div>
                                <h4>Contact Form</h4>
                                <div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Brand/Product:<br/><span style="font-size: 12px; color #aaa;">แบรนด์/สินค้า</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><input type="text" id="inquiryBrand" name="inquiryBrand" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"/></div>
                                </div>
                                <div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Company:<br/><span style="font-size: 12px; color #aaa;">บริษัท</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><input type="text" id="inquiryCompany" name="inquiryCompany" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"/></div>
                                </div>
                                <div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Name:<br/><span style="font-size: 12px; color #aaa;">ชื่อผู้ติดต่อ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><input type="text" id="inquiryName" name="inquiryName" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"/></div>
                                </div>
                                <div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Email:<br/><span style="font-size: 12px; color #aaa;">อีเมล์</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><input type="text" id="inquiryEmail" name="inquiryEmail" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"/></div>
                                </div>
                                <div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Mobile Number:<br/><span style="font-size: 12px; color #aaa;">เบอร์มือถือ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><input type="text" id="inquiryMobile" name="inquiryMobile" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"/></div>
                                </div>
								<div class="col-lg-6" style="padding-left: 0px !important;">
                                    <div class="col-lg-3" style="padding-left: 0px !important;">Remark:<br/><span style="font-size: 12px; color #aaa;">หมายเหตุ</span></div>
                                    <div class="col-lg-9" style="padding-left: 0px !important;"><textarea id="inquiryRemark" name="inquiryRemark" class="form-group" style="width: 100%; margin-bottom: 20px; padding: 10px;"></textarea></div>
                                </div>
                                <div class="col-lg-12">
                                    <hr class="clearfix"/>
									<input type="hidden" name="action" value="sendmail"/>
									
                                    <button type="submit" id="inquieyFormSubmit" class="btn btn-success btn-lg col-lg-4" style="float: right;">Submit</button>
                                    <button type="reset" class="" style="color: #333; float: right; border: none; background: none; padding: 15px 30px;">reset</button>
                                </div>
								
                            </form>

                        </div>
                    </div><!-- END: .panel-collapse .collapse .in -->
                </div><!-- END: .panel .panel-default -->
            </div><!-- END: #accordion .panel-group -->
        </div><!-- END: col-lg-12 -->
    </div><!-- END: row -->

</div><!-- END: col-lg-12 -->

