<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Wang Motorcycles">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wang Motorcycles - Motor Reparatie en Onderhoud, Customizing Motors, BMW, Honda</title>
        <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/gallery.css">

        <link rel="author" href="Jakob Schlötter">
    </head>
    <body>
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <div id="fb-root"></div>
        <script src="js/util.js"></script>

        <div id="contactContent">
        	<iframe id="contactMap" class="actAsDiv" width="563" height="446" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=Pastoorswarande%2050%2C%20Den%20Haag&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        	<div id="contactText">
	        	<h1>ADRES:</h1>
	        	<p>
	        		<b>Wang Motorcycles</b><br>
					Pastoorswarande 50<br>
					2513 TZ Den Haag<br>
					The Netherlands<br>
					<br>
					+31 (0) 617 458 725<br>
					letstalk(at)wangmotorcycles.com<br>
				</p>
			</div>
        </div>

        <div id="gallery">
        		<div id="imagearea">
					<div class="clearfix">
					</div>
				</div>
        </div>

        <div id="slideshow">
        <?php
			date_default_timezone_set('Europe/Amsterdam');

			$imgpath = 'img/';
			$imgfiles = scandir($imgpath);
			$slideimages = Array();
			$i = 0;
			foreach ($imgfiles as $key => $value) {
				$extension = pathinfo($value, PATHINFO_EXTENSION);
				if( $extension !== 'png' && $extension !== 'jpg' ) continue;
				$slideimages[] = $value;
				println('<img class="slideshowImage" id="slideShowImage' . $i . '" src="img/'.$value.'">');
				$i++;
			}
				println('<img class="slideshowImage" id="slideShowImage' . $i . '" src="img/'.$slideimages[0].'">');

			function println($string_message = '') {
			        return isset($_SERVER['SERVER_PROTOCOL']) ? print "$string_message" . PHP_EOL:
			          print $string_message . PHP_EOL;
			    }
        ?></div>
        <div id="fb-page" class="fb-page" data-href="https://www.facebook.com/wangmotorcycles" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/wangmotorcycles"><a href="https://www.facebook.com/wangmotorcycles">Wang Motorcycles</a></blockquote></div></div>
        
        <div id="menu">
        <a href="javascript:wang()"> <!-- at the time of creating, this way is somehow crossbrowser safer than just implementing an svg-file... -->
	        <svg version="1.1" id="menu_logo" class="menuitem" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="333.7px" height="146.6px" viewBox="0 0 333.7 146.6" enable-background="new 0 0 333.7 146.6" xml:space="preserve">
				<g><path fill="#FFFFFF" d="M270.5,57.7c-0.4-12.3-2-26.2-1.6-35.6c0.2-7.7,1.4-11.7,0.7-15.7c-0.6-3.6-6.5-7.4-12.9-6.2
					c-1.1,0.2-3,1-3.6,2.1c0.4,2.4,1,6.7,1.2,10.4c-0.6-0.4-1.4-0.5-2.8-0.2c-7.9,1.4-16.3,12.9-17.3,24.7c-4,7.4-8.1,11.8-9.8,12.1
					c-0.9,0.2-1.5-0.2-1.7-1.3c-0.5-2.5,1.5-10.4,2.6-15.2c1.3-5.3,1.5-9,1-11.7c-0.7-4-3.6-6.6-8.3-5.8c-4.5,0.8-10.7,6.6-15.9,20.8
					c1.9-5.5,1.9-12.9,1.5-15.4c-0.5-3.1-1.7-4.1-5.1-3.5c-6.3,1.1-13.5,13.4-12.4,19.4c0.3,1.9,0.9,3.9,1.9,5.7
					c-4.6,9.3-8.9,13.8-10.9,14.1c-0.8,0.2-1.3-0.1-1.6-2.1c-0.5-2.6-0.3-9.3,1-22.8c0.3-3,0.2-5.6-0.1-6.9c-0.6-3.6-5.2-7.6-12.2-6.4
					c-1.4,0.3-2.7,0.9-3.3,2l0.7,6c-0.6-0.4-1.3-0.5-2.8-0.2c-10.2,1.8-20,20-17.3,35.3c1.6,9.3,6.8,13.3,12.6,12.3
					c3.6-0.6,7.8-4,9.4-13.9c0.1,1.6,0.2,2.9,0.4,4c1.2,6.5,4.3,7.9,8.8,7.1c4.3-0.7,10.7-7.6,15.2-14.5c1.3,6,6.3,10.5,12,9.5
					c2.4-0.4,3-0.9,3.8-2.1c-0.9-7-1.1-11.7-1.1-19.8c3-6.2,6.1-8.3,7-8.5c0.8-0.1,1.3,0.2,1.4,1c0.4,2.2-3,13.5-1.8,20.2
					c1,5.6,3.5,7.9,9.5,6.8c5.3-0.9,12.2-7.9,16.9-15c2.3,5.7,6.5,7.8,11.2,7c4.8-0.8,8.4-6.6,9.3-9.4c0.6,7.8,1,14.8,1.1,17.2
					c0.1,3-0.6,4.2-2.2,4.5c-3.3,0.6-8.8-3.8-14.1-9.5c-5.1,1.2-7.5,6.4-6.8,10.6c1.4,8.1,12.4,12.2,20.6,10.8
					C263,78.1,271,71.8,270.5,57.7z M159,57.9c-1.4,0.3-2.7,0.1-3.4-3.7c-1.4-7.9,2-17.2,6.5-21.4l0.5,21.8
					C161.7,56.4,160.4,57.7,159,57.9z M252,42.3c-1.4,0.3-2.5-0.1-3.2-3.9c-1-5.8,0.9-14.7,6.1-18.9c0,4.9,0.6,13.6,0.9,19.9
					C254.7,41.2,253.6,42,252,42.3z M108.9,83c20.1-3.5,33-37.7,28.1-65.2c-1.6-9.2-7.7-16.5-16.5-15c-5,0.9-8.1,3.6-8.1,8.2
					c6.6,5.1,9.3,8.4,10.3,14.1c3.6,20.2-5.1,43.3-13.6,44.8c-2.5,0.4-4.5-1.8-6.1-5.6c5.2-11.6,10.2-25.7,8.2-37
					c-0.8-4.5-4.2-6.5-8.6-5.7C93.2,23.1,88,45,91.3,63.9c-3,6.2-5.7,10.3-9.2,10.9c-3.4,0.6-5.4-1.5-5.9-4.3c-0.6-3.4-0.4-7.1,1-13.3
					c4.3-18.5,8.6-29.7,7.2-37.7c-1.5-8.8-6.8-11.1-14.2-9.8c-12,2.1-31.2,21.1-28.7,35.6c1.6,8.8,10.2,12.9,19.5,11.6
					c-2.4,8.8-2.7,16.6-2,20.4c1.7,9.5,7.3,14.9,17.6,13.1c7-1.2,13.2-5.6,18.5-14.2C98.9,81.8,103.8,83.9,108.9,83z M63.4,47.3
					c-5.8-1.8-8-3.7-8.6-7.1C53.5,33,63,23.5,65.8,23c1.3-0.2,2,0.1,2.5,2.6C68.9,29.3,66.1,37.1,63.4,47.3z M34.3,137.6
					c0.1,4.3-1,7.8-6,7.4c-3-0.3-2.7-1.7-2.9-4.1c-0.3-4.3-0.6-8.5-0.9-12.8c-0.8,2.7-2.7,4.9-2.9,7.7c-0.2,3.6-2.4,7.9-6.7,6.1
					c-2.1-0.9-2.2-5.8-3.1-7.8c-0.7-1.6-1.5-3.2-2.2-4.8c0.2,4,1.8,11.5-0.3,15.1c-1,1.8-4.6,2.9-6.3,1.4c-1.3-1.2-0.8-5.8-0.9-7.5
					c-0.2-3.2-0.4-6.4-0.6-9.6c-0.2-3.1-0.8-5.7-1.4-8.8c-1-5.2,8.5-7.6,11.6-4.4c0,0,0,0,0.1,0.1c0.1,0.2,0.1,0.1,0.1,0.1
					c2.9,3.5,4.8,8.1,6.7,12.2c1.5-3.7,3-7.5,4.6-11.1c1.6-3.6,4.2-4.6,8.1-3.8c3.6,0.8,2.4,7.8,2.5,10.5
					C34,128.2,34.2,132.9,34.3,137.6z M56.6,111.5C55.8,111.5,58.2,111.4,56.6,111.5L56.6,111.5z M53.1,119.3c0.1,0,0.2,0.1,0.3,0.1
					C53.7,119.6,53,119.7,53.1,119.3z M56.6,111.5c-15.3,0.7-19.6,31.4-3.4,32.5c10.3,0.7,14.4-7.7,14.5-16.8
					C67.9,120,65.5,111.1,56.6,111.5z M58.1,136.9c-7-1-5.5-12.4-5-17.5c0.1,0,0.2,0.1,0.3,0.1C60.3,121.6,59,131.2,58.1,136.9z
					 M95.4,110.7c3.4,3.9,0,9.1-4.4,9.6c0,3,0,6,0,9c0,3.2,0.6,7.1-0.2,10.2c-0.6,2.5-3.6,3-5.8,3.1c-2.8,0.1-3.9-1-4-3.8
					c-0.3-5.9-0.3-11.9-0.3-17.9c-2.8,0.1-5.6,0.4-5.5-3.2c0.1-2.1,0.7-6.2,3.3-6.6C84.1,110.6,89.8,110.3,95.4,110.7z M116.6,109.6
					c-15.3,0.3-20.4,30.9-4.2,32.4c10.2,0.9,14.6-7.4,14.9-16.5C127.6,118.4,125.4,109.4,116.6,109.6z M117.4,135
					c-7-1.2-5.2-12.5-4.6-17.6c0.1,0,0.2,0.1,0.3,0.1C120,119.8,118.5,129.4,117.4,135z M116.6,109.6
					C115.7,109.6,118.1,109.5,116.6,109.6L116.6,109.6z M112.8,117.4c0.1,0,0.2,0.1,0.3,0.1C113.4,117.7,112.8,117.7,112.8,117.4z
					 M154,129.7C154.9,128.7,154.4,130.2,154,129.7L154,129.7z M154,129.7c4.3-4.9,9-16.7,0.2-20.1c-3.2-1.2-7.2-0.7-10.3,0.5
					c-2.6,1-7.8,0.3-7.8,4.4c0,4.2,0.3,8.4,0.2,12.7c-0.1,3.8-0.6,8.2,0.2,12c0.6,2.9,6.4,3.2,7.9,0.9c1.1-1.7,0.8-4.5,1-6.4
					c4.2,2.4,5,11.7,11.8,6.9c1.9-1.4,3.4-4.9,2-7.1C156.7,133.1,155.5,131.6,154,129.7z M150.4,122.8c-0.2,1.5-0.6,3.1-1.2,4.5
					c-1.1-0.3-2.4-0.6-3.5-0.6c0.1-3.3,0.3-6.6,0.4-9.8C149.6,117.2,150.8,119.4,150.4,122.8z M184.7,122c-1.7,0-3,0-3.4-1.8
					c-0.4-1.7-0.8-3-2.6-3.5c-0.9,3.5-1.2,7.6-1.1,11.2c0.2,5,3.8,5.6,8.1,5.6c1.2,0,2.6-0.6,2.9,0.9c0.4,2-0.4,4.2-2,5.4
					c-3.5,2.6-10.1,2.1-13.8,0.1c-4.8-2.6-5.2-8.5-5.1-13.3c0.2-4.9,0.7-11.8,5.8-14.1c4.1-1.9,10-5.9,14.2-1.7
					C191.1,113.8,189.9,122.1,184.7,122z M184.7,122C186.3,122,184,122,184.7,122L184.7,122z M216.8,109.6
					C216.3,109.6,217.6,109.6,216.8,109.6L216.8,109.6z M221.9,113.4c0,0.9-1.1,2.3-1.5,3c-1.9,3.9-3.8,7.7-5.7,11.6
					c-1.3,2.6-1,4.9-1.1,7.8c-0.1,2.2-0.3,4.2-2.6,5.2c-2.1,0.9-7.6,1.9-8.1-1.4c-0.5-3,0-6.4,0.2-9.4c-0.2-1.2-0.9-2.5-1.3-3.7
					c-1.1-3-1.9-6.7-3.5-9.6c-5.9-4.4,4.3-9.9,8.3-6.8c2.4,1.9,3.1,7.4,4,10.1c1.1-3,2.3-10.7,6.3-10.6
					C219.2,109.6,221.5,110.8,221.9,113.4z M243.9,123.2c-1.7,0-3,0-3.3-1.9c-0.3-1.7-0.7-3-2.5-3.6c-1,3.5-1.4,7.5-1.3,11.2
					c0.1,5,3.6,5.6,8,5.8c1.2,0,2.6-0.5,2.9,1c0.4,2-0.5,4.1-2.1,5.3c-3.6,2.5-10.2,1.8-13.8-0.2c-4.7-2.7-5-8.6-4.8-13.4
					c0.3-4.9,1-11.7,6.2-14c4.1-1.8,10.2-5.7,14.3-1.4C250.4,115.1,249,123.4,243.9,123.2z M243.9,123.2
					C245.4,123.3,243.1,123.2,243.9,123.2L243.9,123.2z M273.6,134.6c1.9,1.6,0.8,5.9-0.8,7.3c-2.4,2.1-8.2,1.6-11.1,1
					c-3.8-0.8-5.2-2.8-5-6.6c0.2-3.9,0.4-7.8,0.6-11.7c0.2-3.3-0.1-6.5,0-9.7c0.2-3.7,5.7-3.9,8.4-3.6c3.9,0.5,2.3,5.8,2.1,8.5
					c-0.3,4.9-0.7,9.8-1.1,14.7C269,134.4,271.3,134.5,273.6,134.6z M299.6,144.3C300.1,144.2,299.2,144.3,299.6,144.3L299.6,144.3z
					 M305.2,115.1c0.3,1.7,0.2,4.1-1.1,5.4c-2.1,2-7.1,1.1-9.7,1c-2-0.1-1.4,3.6-1.5,5.4c2.2-0.1,4.4,0,6.6,0.1c1.3,0.1,2.1-0.4,2.5,1.1
					c0.3,1.2,0,2.8-0.5,3.9c-1.3,2.5-4.6,1.9-6.9,1.8c-2.8-0.1-2.2,0.6-2.4,3.2c2.6,0.1,5.2,0.3,7.8,0.4c1.3,0.1,2.5-0.4,2.9,1.2
					c0.5,2.3-0.6,5.4-3.2,5.8c-3.5,0.6-7.4,0.3-10.9-0.2c-4.4-0.6-6.2-2.8-5.9-7c0.4-5.5,0.8-10.9,1.2-16.4c-1.5-4.1-0.7-7.8,4.1-8
					c4.5-0.2,9.2,0.4,13.7,0.7C303.6,113.5,304.9,113.2,305.2,115.1z M330.5,143.1c-3.6,4-10.2,4-14.9,2.3c-4-1.5-6.8-7.6-2.3-10.5
					c4.5-2.8,4.5,3.5,7.7,4.9c0.9,0.4,3.5,0.4,2.9-1.3c-0.6-1.7-3.4-3.3-4.8-4.4c-4.1-3.3-7.1-7-5-12.5c1.7-4.4,6.1-7.7,10.8-7.4
					c4.9,0.3,11.7,4.7,7.7,10.3c-1.4,2-4,2-6.1,1.3c-0.4-2.3-1.9-3.5-4-4.4c-2,4.1,3.3,6.5,5.9,8.6C332.8,133.1,334.7,138.5,330.5,143.1
					z M324.8,114.1C323.8,114.1,326.4,114.2,324.8,114.1L324.8,114.1z"/>
				</g>
			</svg></a>
	        <div id="menuas">
				<div class="menuitem dropTheShadow" id="menuGallery"><a href="javascript:gallery()">GALLERY</a></div>
				<div class="menuitem dropTheShadow" id="menuKontakt"><a href="javascript:contact()">CONTACT</a></div>
				<div class="menuitem dropTheShadow" id="menuFacebook"><a href="javascript:facebook()">FACEBOOK</a></div>
				<div class="menuitem dropTheShadow" id="menuInstagram"><a href="javascript:instagram()">INSTAGRAM</a></div>
			</div>
		</div>

	   	<script type="text/javascript">  
            jQuery(document).ready(function() {
                /*
                 * Replace all SVG images with inline SVG
                 */
                    jQuery('img.svg').each(function(){
                        var $img = jQuery(this);
                        var imgID = $img.attr('id');
                        var imgClass = $img.attr('class');
                        var imgURL = $img.attr('src');
                
                        jQuery.get(imgURL, function(data) {
                            // Get the SVG tag, ignore the rest
                            var $svg = jQuery(data).find('svg');
                
                            // Add replaced image's ID to the new SVG
                            if(typeof imgID !== 'undefined') {
                                $svg = $svg.attr('id', imgID);
                            }
                            // Add replaced image's classes to the new SVG
                            if(typeof imgClass !== 'undefined') {
                                $svg = $svg.attr('class', imgClass+' replaced-svg');
                            }
                            
                            // Remove any invalid XML tags as per http://validator.w3.org
                            $svg = $svg.removeAttr('xmlns:a');
                            
                            // Replace image with new SVG
                            $img.replaceWith($svg);
                        });
    
                    });
            });
        </script>
        <div id="animator"></div>
        <script src="js/gallery.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>