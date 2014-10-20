<?php
/*
 Template Name: Contact Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
<?php get_template_part("navigator"); ?>
<style>
    html, body, #map-canvas {
        min-height: 400px;
        margin: 0px;
        padding: 0px
    }
    /* Set a size for our map container, the Google Map will take up 100% of this container */
    #map {
        width: 100%;
        min-height: 500px;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
    function initialize() {
        var myLatlng = new google.maps.LatLng(13.738967, 100.607424);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Uluru (Ayers Rock)'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container wrapper clearfix">
    <div class="col-lg-12" style="min-height: 300px; background: #fff; padding: 10px; margin-bottom: 15px;">
        <div id="map-canvas" class="col-lg-6"></div>
        <div class="col-lg-6" style="padding: 10px;">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>

                <article id="post-not-found" class="hentry cf">
                    <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                    </footer>
                </article>

            <?php endif; ?>
        </div>
    </div>
    <div class="col-lg-12" style="background: #fff; padding: 10px; margin-bottom: 15px;">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form id="postContactForm" 
				name="postContactForm" 
				method="POST"
				data-bv-message="This value is not valid" 
				data-bv-feedbackicons-valid="glyphicon glyphicon-ok" 
				data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" 
				data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" 
				onsubmit="return confirm('Do you really want to submit the form?');" 
			>
                <div class="col-lg-6 form-group">
                    <label for="name">Your name:</label>
                    <input type="text" 
						id="contactName" 
						name="contactName" 
						class="form-control" 
						style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"
						data-bv-notempty="true" 
						data-bv-notempty-message="The name is required"
					/>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="title">Your subject:</label>
                    <input type="text" 
						id="contactSubject" 
						name="contactSubject" 
						class="form-control" 
						style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"
						data-bv-notempty="true" 
						data-bv-notempty-message="The subject is required"
					/>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="email">Email address:</label>
                    <input type="text" 
						id="contactEmail" 
						name="contactEmail" 
						class="form-control" 
						style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"
						data-bv-notempty="true" 
						data-bv-notempty-message="The email is required"
					/>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="phone">Phone number:</label>
                    <input type="text" 
						id="contactPhone" 
						name="contactPhone" 
						class="form-control" 
						style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"
						data-bv-notempty="true" 
						data-bv-notempty-message="The email is required"
					/>
                </div>
                <div class="col-lg-12 form-group">
                    <label for="description">Your message:</label>
                    <textarea id="contactMessage" 
						name="contactMessage" 
						class="contactDescription form-control" 
						style=" min-height: 100px; width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;" 
						data-bv-notempty="true" 
						data-bv-notempty-message="The message is required"
					></textarea>
                </div>
                <div class="col-lg-12">
					<input type="hidden" name="action" value="send_contact_form"/>
                    <input type="submit" value="SUBMIT" style="background: #EE7D00; color: #fff; width: 100%; border: 0; padding: 10px; font-size: 20px;"/>
                </div>
            </form><!-- END: contact form -->
        </div>
    </div>
</div>

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

<!-- <div class="resultReloading"></div> -->

<?php 
	if( isset($_POST['action']) && $_POST['action'] == 'send_contact_form' ):
		// echo "<script>alert('Send Contact Form');</script>";
		do_action('post_contact_mail');
	endif;
?>

<?php get_footer(); ?>