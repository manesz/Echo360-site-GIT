<footer class="footer panel-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 clearfix" style="">
                <nav role="navigation">
                    <?php wp_nav_menu(array(
                        'container' => '',                              // remove nav container
                        'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
                        'menu' => __( 'Footer Menu', 'bonestheme' ),   // nav name
                        'menu_class' => 'nav-footer',            // adding custom nav class
                        'theme_location' => 'footer-links',             // where it's located in the theme
                        'before' => '',                                 // before the menu
                        'after' => '',                                  // after the menu
                        'link_before' => '',                            // before each link
                        'link_after' => '',                             // after each link
                        'depth' => 0,                                   // limit the depth of the nav
                        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                    )); ?>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-footer clearfix" style="">
                <!-- <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p> -->
                © 2012 - 2014 Echo 360 Co., Ltd. - A BOI Promoted Company A Patent Pending System
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/google-analytic.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/image-rollver.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/jcarousellite_1.0.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/myscript.js"></script>

<script>

	$(document).ready(function(){
		$(window).on('scroll',function() {
		var scrolltop = $(this).scrollTop();
	 
		if(scrolltop >= 51) {
		    // alert("hi !");
			$('#header').addClass("fixed-position");
		}
		 
		else if(scrolltop <= 50) {
		  $('#header').removeClass("fixed-position");
		  $('#header').addClass("margin-top-10");
		}
	  });
		
	});
	
	function toggleChevron(e) {
    $(e.target)
			.prev('.panel-heading')
			.find("i.indicator")
			.toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
	}
	// $(".collapse").collapse();
	// $('#accordion').collapse({hide: true})
	$('.in').collapse({hide: true})
	
</script>

<script>
    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
    }
    // $(".collapse").collapse();
    $('#accordion').collapse({hide: true})
	
</script>

<script>
	$(document).ready(function(){
	
		// $('#inquieyFormSubmit').click(function(){
			// alert('Submited !');
		// });
		
		// $('form').on('submit', function (e) {
	
			// alert("Successful !!");

		  // e.preventDefault();

		  // $.ajax({
			// type: 'post',
			// url: 'sendmail.php',
			// data: $('form').serialize(),
			// success: function () {
			  // alert('form was submitted');
			// }
		  // });

		// });
	
	// });
</script>


<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>
</html>
