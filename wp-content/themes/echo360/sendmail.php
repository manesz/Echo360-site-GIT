<?php get_header(); ?>
<?php
$action = @$_POST['action'];
	if(!empty($action)): 
	
		echo "<script>alert('".$action."')</script>";
	
		$email_to = "w.satitnimankan@echo-360.com";
		// $email_to = "j.thanasitthipan@echo-360.com";
		$email_title = "Echo 360 Iquiry From";
		$email_headers[] = 'From: Wararit Satitnimankan <manesz13@gmail.com>';
		// $email_headers[] = "Cc: P'Max <j.thanasitthipan@echo-360.com>";
		// $email_headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address
		$email_message = file_get_contents(get_template_directory_uri()."/library/mail-template.html");
		
		$service = '';
		
		foreach(@$_POST['service'] as $key=>$value):
			$service .= $value.',';
		endforeach;
		
		$email_message = str_replace('{{title}}', @$_POST['title'], $email_message);//replaceTitle
		$email_message = str_replace('{{date}}', date('Y M d H:i:s'), $email_message);//replaceDate
		$email_message = str_replace('{{service}}', $service, $email_message);//replaceService
		$email_message = str_replace('{{company}}', @$_POST['company'], $email_message);//replaceCompany
		$email_message = str_replace('{{brand}}', @$_POST['brand'], $email_message);//replaceBrand
		$email_message = str_replace('{{name}}', @$_POST['name'], $email_message);//replaceName
		$email_message = str_replace('{{email}}', @$_POST['email'], $email_message);//replaceEmail
		$email_message = str_replace('{{mobile}}', @$_POST['mobile'], $email_message);//replaceMobileNumber
		
		function set_html_content_type() { return 'text/html'; }
		
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );

		wp_mail( $email_to, $email_title, $email_message, $email_headers );

		remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
			
	endif;
?>
<?php get_footer(); ?>