<?php get_header(); ?>
<?php get_template_part("navigator"); ?>

<style>
	.testimonials_block img{
		margin: auto;
		left: -100%;
		right: -100%;
		top: -100%;
		bottom: -100%;
		position:absolute;
		margin: auto;
	}
</style>

<div class="container wrapper" style="margin-bottom: 30px;">
<?php
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile; endif ;
?>
    <div class="clearfix"></div>
	
	<section id="testimonials" class="clearfix" style="background: #fff; height: auto; opacity: .9; border-radius: 5px;">
	
		<h1 style=" padding: 10px;">Our Clients</h1>
	
        <!-- section header -->
        <div class="parallax_effect" data-stellar-background-ratio="0.5" style="padding-bottom: 30px;">
            <!--<div class="container">-->
                <div class="jcarousel_block" style="">
                    <div class="jCarouselLite">
                        <ul>
                            <!--<li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">-->
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-brands.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-cornetto.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-cp.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-jele-beautie.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-mister-donute.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-nivea.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-nokair.png" alt="" />
                            </li>
                            <!--<li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-pg.png" alt="" />
                            </li>-->
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-petloft.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-preme-nobu.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-purra.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-sp1.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-sanvo1.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-scb1.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-singha.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-singha-water.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-tipco.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-uniriver.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-บุญถาวร.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-ศรีสวิสดิ์.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-aberdeen.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-aia.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-ais.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-artline.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-auntie-anne.png" alt="" />
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-12 testimonials_block" style="">
                                <img src="http://www.echo-360.com/wp-content/uploads/2014/09/freebie-customers-b-ing.png" alt="" />
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                <!--</div> //Jcarousel Lite-->
            </div><!-- end .container -->
            <div class="jcarousel_prev"></div>
            <div class="jcarousel_next"></div>
            <div class="home_gradient"></div>
        </div><!-- //section header -->
    </section>
	
</div> <!-- /container -->

<?php get_footer(); ?>