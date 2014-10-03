<?php get_header(); ?>
<?php get_template_part("navigator"); ?>

    <div class="container wrapper clearfix">

        <div class="col-lg-12" style="">

            <div class="row">
                <div class="col-lg-12 clearfix" style="background: #fff; padding: 10px; padding-top: 20px; margin-bottom: 10px;">

                    <?php
                        $categories = get_the_category();
                        $query = new WP_Query( 'posts_per_page= -1&cat='.$categories[0]->cat_ID );
//                        echo $num = $query->post_count;

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
												<?php if($categories[0]->cat_ID == 4) {?>
													<span style="color: #ddd; font-size: 12px;"><?php if( get_post_custom_values("position", get_the_ID()) ) { echo $position[0]; };?></span>
												<?php }else {?>
													<span style="color: #ddd; font-size: 12px;"><?php the_date(); ?></span>
												<?php } ?>
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