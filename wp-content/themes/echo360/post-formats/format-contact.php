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

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <header class="article-header">
        <h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>
    </header>
    <section class="entry-content cf" itemprop="articleBody">
        <div class="container wrapper clearfix">
            <div class="col-lg-12" style="min-height: 300px; background: #fff; padding: 10px; margin-bottom: 15px;">
                <div id="map-canvas" class="col-lg-6"></div>
                <div class="col-lg-6" style="padding: 10px;">
                    <h2>Echo 360 co.,ltd.</h2>
                    <b>Address:</b> Echo 360 Co., Ltd. Floor 2 The Village Center 869 Pattanakarn Road Bangkok 10250 Thailand<br/>
                    <b>Phone:</b> +66 2 314 1528<br/>
                    <b>Fax:</b> +66 2 719 8864<br/>
                    <b>Email our Sales Team:</b> sales@echo-360.com<br/>
                    <b>Email:</b> info@echo-360.com<br/><br/>
                    <img src="assets/img/social-share.png" style="width: 210px;"/> </p>
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
    </section>
    <footer class="article-footer">
    </footer>
</article>