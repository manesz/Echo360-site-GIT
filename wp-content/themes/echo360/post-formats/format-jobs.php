
<?php
/*
 * This is the default post format.
 *
 * So basically this is a regular post. if you don't want to use post formats,
 * you can just copy ths stuff in here and replace the post format thing in
 * single.php.
 *
 * The other formats are SUPER basic so you can style them as you like.
 *
 * Again, If you want to remove post formats, just delete the post-formats
 * folder and replace the function below with the contents of the "format.php" file.
*/
?>
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

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header class="article-header">

        <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>

        <p class="byline vcard">
            <?php
            if( get_the_ID() != 112 ){
                printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate style="margin-bottom: 50px;">%2$s</time>', 'bonestheme' ),
                    get_the_time('Y-m-j'),
                    get_the_time(get_option('date_format')),
                    get_the_author_link( get_the_author_meta( 'ID' )
                    ));
            }
            ?>
        </p>

    </header> <?php // end article header ?>

    <div style="margin-bottom: 20px;"><?php the_breadcrumb(); ?><hr style="border-color: #EE7D00; margin: 10px 0 10px"/></div>

    <section class="entry-content cf" itemprop="articleBody">
        <?php
        // the content (pretty self explanatory huh)
        the_content();
		echo "<div class='clearfix'></div>";
		
		// WP_Query arguments
		$args = array (
			'category_name'          => 'Jobs',
			'posts_per_page'         => '-1',
		);

		// The Query
		$query = new WP_Query( $args );
		
		echo "<div class='row'>";
		echo "<div class='col-lg-12 margin-bottom-10' style='height: auto;'>";
		
		$i = 1;
		if( $query->have_posts() ){
			while ( $query->have_posts() ) { $query->the_post();
			
				
		?>
		
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
								<strong><?php the_title(); ?></strong> 
								</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
							</h4>
						</div><!-- END: .panel-heading -->
						<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
							<div class="panel-body"><?php the_content(); ?></div>
						</div><!-- END: .panel-collapse .collapse .in -->
					</div><!-- END: .panel .panel-default -->
				</div><!-- END: #accordion .panel-group -->

		<?php
				
			$i++;
			}//END: while have_posts()
		}//END: if have_posts()

		echo "</div>";
		echo "</div>";
		
        /*
         * Link Pages is used in case you have posts that are set to break into
         * multiple pages. You can remove this if you don't plan on doing that.
         *
         * Also, breaking content up into multiple pages is a horrible experience,
         * so don't do it. While there are SOME edge cases where this is useful, it's
         * mostly used for people to get more ad views. It's up to you but if you want
         * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
         *
         * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
         *
        */
        // wp_link_pages( array(
            // 'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
            // 'after'       => '</div>',
            // 'link_before' => '<span>',
            // 'link_after'  => '</span>',
        // ) );
        ?>
    </section> <?php // end article section ?>

    <footer class="article-footer">

        <?php// printf( __( 'Category: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

        <?php// the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

    </footer> <?php // end article footer ?>

</article> <?php // end article ?>