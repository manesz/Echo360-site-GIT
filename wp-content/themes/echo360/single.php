<?php get_header(); ?>
<?php get_template_part("navigator"); ?>


<div class="container wrapper">

    <div class="row">

<!--        <div class="col-lg-3" style="margin-bottom: 30px;">-->
<!--            <div class="col-lg-12" style="background: #fff;">-->
<!--                --><?php //include_once("sidebar.php");?>
<!--            </div>-->
<!--        </div><!-- END: sidebar -->

        <div class="col-lg-12" style="margin-bottom: 30px;">
            <div class="single-post col-lg-12" style="background: #fff; padding: 10px;">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php
                    /*
                     * Ah, post formats. Nature's greatest mystery (aside from the sloth).
                     *
                     * So this function will bring in the needed template file depending on what the post
                     * format is. The different post formats are located in the post-formats folder.
                     *
                     *
                     * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
                     * A SPECIFIC POST FORMAT.
                     *
                     * If you want to remove post formats, just delete the post-formats folder and
                     * replace the function below with the contents of the "format.php" file.
                    */
                    get_template_part( 'post-formats/format', get_post_format() );
                    ?>

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

            </div><!-- END: content wrapper -->
        </div><!-- END: main content -->

    </div><!-- END: row -->
</div><!-- END: container wrapper -->

<?php get_footer(); ?>
