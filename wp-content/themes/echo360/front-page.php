<?php get_header(); ?>
<?php get_template_part("navigator"); ?>

<div class="container wrapper">
<?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif ; ?>
    <div class="clearfix"></div>
</div> <!-- /container -->

<div class="container wrapper">

    <section id="testimonials">
        <!-- section header -->
        <div class="parallax_effect" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="jcarousel_block">
                    <div class="jCarouselLite">
                        <ul>
                            <li class="col-lg-4 testimonials_block">
                                <div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
                                <a href="javascript:void(0);"><img src="wp-content/themes/echo360/library/images/avatar1.jpg" alt="" /></a>
                                <div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
                            </li>
                            <li class="col-lg-4 testimonials_block">
                                <div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
                                <a href="javascript:void(0);"><img src="wp-content/themes/echo360/library/images/avatar2.jpg" alt="" /></a>
                                <div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
                            </li>
                            <li class="col-lg-4 testimonials_block">
                                <div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
                                <a href="javascript:void(0);"><img src="wp-content/themes/echo360/library/images/avatar3.jpg" alt="" /></a>
                                <div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
                            </li>
                            <li class="col-lg-4 testimonials_block">
                                <div class="testimonials_txt">Fusce ornare semper varius. Duis ac mi neque. Praesent vitae eros urna. Integer dapibus, tellus non laoreet gravida, neque turpis ultricies tellus, a ullamcorper</div>
                                <a href="javascript:void(0);"><img src="wp-content/themes/echo360/library/images/avatar3.jpg" alt="" /></a>
                                <div class="author_inf"><span>Tom Doe,</span>lorem ipsum</div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div><!-- //Jcarousel Lite-->
            </div><!-- end .container -->
            <div class="jcarousel_prev"></div>
            <div class="jcarousel_next"></div>
            <div class="home_gradient"></div>
        </div><!-- //section header -->
    </section>

</div>

<?php get_footer(); ?>