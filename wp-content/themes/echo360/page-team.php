<?php get_header(); ?>
<?php get_template_part("navigator"); ?>

    <div class="container wrapper clearfix">

        <div class="col-lg-12" style="">

            <div class="row">
                <div class="col-lg-12 clearfix" style="background: #fff; padding: 10px; padding-top: 20px; margin-bottom: 10px;">

					<h3 style="padding: 0 15px;">Management Team</h3>
                    <?php
						
						// WP_Query arguments
						$managementTeam = array('79', '90', '101', '97', '92');
						$args = array (
							//'category_name'          => 'Management Team',
							'post__in'                      => $managementTeam,
							'posts_per_page'         => '-1',
						);

						// The Query
						$query = new WP_Query( $args );

                    if( $query->have_posts() ){

                        while ( $query->have_posts() ) { $query->the_post();
                            ?>
                            <a href="<?php echo the_permalink();?>">
                                <div class="col-lg-3 col-md-4 col-sm-4 margin-bottom-10">
                                    <?php
                                        get_post_custom_values("position", get_the_ID());
                                        $position = get_post_custom_values( 'position' );
                                    ?>

                                    <div class="image">
                                        <div class="category-title wordwrap" style="">
											<p>
												<strong><?php the_title();?></strong><br/>
												<?php echo $position[0];?>
                                            </p>
                                        </div>
                                        <span class="roll" ></span>
                                        <div style="background: #000; width: 100%; height: 100px;"></div>
                                        <?php
                                        $postID = get_the_id();
                                        $url = wp_get_attachment_url( get_post_thumbnail_id($postID) );
                                        if(!empty($url)){
                                            ?>
                                            <img class="img_thumb" alt="" src="<?php echo $url;?>" style="max-width: auto; height: 285px;" />
                                        <?php
                                        } else {
                                            ?>
                                            <img class="img_thumb" alt="" src="<?php echo get_template_directory_uri();?>/library/images/nothumb.gif" style="max-width: 400px; height: auto;" />
                                        <?php
                                        }
                                        ?>
                                        <!--                                <img class="imgborder" src="assets/img/freebie-app.png" style=""/>-->
                                    </div>
                                </div>
                            </a>

                        <?php
                        };
                    } else {
                        echo "<h2>No data.<h2/>";
                    };

                    ?>
					<div class="clearfix"></div>
					<h3 style="padding: 0 15px;">Board of Director</h3>
                    <?php
						
						// WP_Query arguments
						$boardOfDirector = array('99', '94');
						$args = array (
							//'category_name'          => 'Board of Directors',
							'post__in'                      => $boardOfDirector,
							'posts_per_page'         => '-1',
						);

						// The Query
						$query = new WP_Query( $args );

                    if( $query->have_posts() ){

                        while ( $query->have_posts() ) { $query->the_post();
                            ?>
                            <a href="<?php echo the_permalink();?>">
                                <div class="col-lg-3 col-md-4 col-sm-4 margin-bottom-10">
                                    <?php
                                        get_post_custom_values("position", get_the_ID());
                                        $position = get_post_custom_values( 'position' );
                                    ?>

                                    <div class="image">
                                        <div class="category-title wordwrap" style="">
											<p>
												<strong><?php the_title();?></strong><br/>
												<?php echo $position[0];?>
                                            </p>
                                        </div>
                                        <span class="roll" ></span>
                                        <div style="background: #000; width: 100%; height: 100px;"></div>
                                        <?php
                                        $postID = get_the_id();
                                        $url = wp_get_attachment_url( get_post_thumbnail_id($postID) );
                                        if(!empty($url)){
                                            ?>
                                            <img class="img_thumb" alt="" src="<?php echo $url;?>" style="max-width: auto; height: 285px;" />
                                        <?php
                                        } else {
                                            ?>
                                            <img class="img_thumb" alt="" src="<?php echo get_template_directory_uri();?>/library/images/nothumb.gif" style="max-width: 400px; height: auto;" />
                                        <?php
                                        }
                                        ?>
                                        <!--                                <img class="imgborder" src="assets/img/freebie-app.png" style=""/>-->
                                    </div>
                                </div>
                            </a>

                        <?php
                        };
                    } else {
                        echo "<h2>No data.<h2/>";
                    };

                    ?>


                </div><!-- END: .col-lg-12 -->

            </div><!-- END: .row -->

        </div><!-- END: .col-lg-12 -->

    </div> <!-- /container -->

<?php get_footer(); ?>