<?php get_header(); ?>
<?php get_template_part("navigator"); ?>

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

<div class="container wrapper clearfix">

	<div class="col-lg-12" style="">
		<div class="row">
			<div class="col-lg-12 clearfix" style="background: #fff; padding: 10px; padding-top: 20px; margin-bottom: 10px;">
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

        <?php
        // the content (pretty self explanatory huh)
		
		if (have_posts()) : while (have_posts()) : the_post();
			the_content();
			endwhile;
		else :
			echo "<h1>"._e( 'Oops, Post Not Found!', 'bonestheme' )."</h1>";
			echo "<p>"._e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' )."</p>";
			echo "<p>"._e( 'This is the error message in the single.php template.', 'bonestheme' )."</p>";
		endif;
		
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

    <footer class="article-footer">

        <?php// printf( __( 'Category: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

        <?php// the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

    </footer> <?php // end article footer ?>
			</div><!--END: col-lg-12 -->
		</div><!--END: row -->
	</div><!--END: col-lg-12 -->
		
</div><!--END: container -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    

</article> <?php // end article ?>

<script>
	function toggleChevron(e) {
    $(e.target)
			.prev('.panel-heading')
			.find("i.indicator")
			.toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
	}
	$(".collapse").collapse();
	$('#accordion').collapse({hide: true})
</script>

<?php get_footer(); ?>