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
            <form>
                <div class="col-lg-6">
                    <label for="name">Your name:</label>
                    <input type="text" id="name" name="name" style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"/>
                </div>
                <div class="col-lg-6">
                    <label for="title">Your subject:</label>
                    <input type="text" name="title" style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"/>
                </div>
                <div class="col-lg-6">
                    <label for="email">Email address:</label>
                    <input type="text" id="email" name="email" style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"/>
                </div>
                <div class="col-lg-6">
                    <label for="phone">Phone number:</label>
                    <input type="text" id="phone" name="phone" style="width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"/>
                </div>
                <div class="col-lg-12">
                    <label for="description">Your message:</label>
                    <textarea id="description" class="description" style=" min-height: 100px; width: 100%; border: 1px #EE7D00 solid; margin-bottom: 20px; padding: 10px;"></textarea>
                </div>
                <div class="col-lg-12">
                    <input type="submit" value="SUBMIT" style="background: #EE7D00; color: #fff; width: 100%; border: 0; padding: 10px; font-size: 20px;"/>
                </div>
            </form><!-- END: contact form -->
        </div>
    </div>
</div>

<?php get_footer(); ?>