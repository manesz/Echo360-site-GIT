
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
<?php if( in_category(array('Team')) ){ ?>
<style>
.fasteasysocialsharing{ display: none; }
</style>
<?php } ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

<header class="article-header">

  <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>
  
  <p class="byline vcard">
	<?php
		foreach (get_the_category() as $category) {
			if ( $category->name !== 'FORBIDDEN CATEGORY NAME' ) {
				// echo '<a href="' . get_category_link($category->term_id) . '">' .$category->name . '</a><br />'; //Markup as you see fit
	
				if( !is_page() ){
				
					if( !in_category(array('Team')) ){
						printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate style="margin-bottom: 50px;">%2$s</time>', 'bonestheme' ),
							get_the_time('Y-m-j'),
							get_the_time(get_option('date_format')),
							get_the_author_link( get_the_author_meta( 'ID' )
						));
					}//END: if check not in category name
				}//END: if check is_page
			
			}//END: if check category name
		}//END: foreach
	?>
  </p>

</header> <?php // end article header ?>

<div id="normal-nav" style="margin-bottom: 20px;"><?php the_breadcrumb(); ?><hr style="border-color: #EE7D00; margin: 10px 0 10px"/></div>
<div id="team-nav" style="margin-bottom: 20px;">
	<ul id="breadcrumbs">
		<li><a href="http://test.echo-360.com/echo">Home</a></li>
		<li class="separator"> / </li>
		<li><a href="http://test.echo-360.com/echo/team" title="View all posts in Team" rel="category tag">Team</a></li>
		<li class="separator"> / </li>
		<li><?php the_title(); ?></li>
	</ul>
	<hr style="border-color: #EE7D00; margin: 10px 0 10px">
</div>



<section class="entry-content cf" itemprop="articleBody">
  <?php
	// the content (pretty self explanatory huh)
	the_content();

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
	wp_link_pages( array(
	  'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
	  'after'       => '</div>',
	  'link_before' => '<span>',
	  'link_after'  => '</span>',
	) );
  ?>
</section> <?php // end article section ?>

<footer class="article-footer">
  
<?php 
  foreach (get_the_category() as $category) {
		if ( $category->name !== 'FORBIDDEN CATEGORY NAME' ) {
			// echo '<a href="' . get_category_link($category->term_id) . '">' .$category->name . '</a><br />'; //Markup as you see fit

			if( !is_page() ){
			
				if( !in_category(array('Team')) ){
					
					if(!is_page()){ echo "<span style='color: #fff; background: #EE7D00; padding: 2px 5px 2px 5px; margin-right: 5px;'>Category: </span>"; printf( __( '%1$s', 'bonestheme' ), get_the_category_list(', ') ); } 

					//if(!is_page()){ the_tags( '<p class="tags"><span class="tags-title" sty;e="color: #fff; background: #EE7D00; padding: 2px 5px 2px 5px; margin-right: 5px;">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); } 

				}//END: if check not in category name
			}//END: if check is_page
		
		}//END: if check category name
	}//END: foreach
?>

</footer> <?php // end article footer ?>

</article> <?php // end article ?>