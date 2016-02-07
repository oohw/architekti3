<!DOCTYPE HTML>
<?php
	// prepare image.json 
	date_default_timezone_set('Europe/Amsterdam');

	// $imgpath = 'gallery/img';
	// $imgfiles = scandir($imgpath);
	// $galleryimages = Array();
	// $i = 0;
	// foreach ($imgfiles as $key => $value) {
	// 	$extension = pathinfo($value, PATHINFO_EXTENSION);
	// 	if( $extension == 'png' || $extension == 'jpg' ) {
	// 		$galleryimage = Array();
	// 		$galleryimage["thumbUrl"]=$value;
	// 	    $galleryimage["title"]="this is a title";
	// 	    $galleryimage["theight"]=120;
	// 	    $galleryimage["description"]="first image ever";
	// 	    $galleryimage["author"]="ME";
	// 	    $galleryimage["name"]=$value;
	// 	    $galleryimage["twidth"]=120 * getimagesize($imgpath.'/'.$value)[1] / getimagesize($imgpath.'/'.$value)[0];
	// 	    $galleryimage["alt"]="yo";
	// 		$galleryimages[] = $galleryimage;
	// 		// $imagick = new Imagick(realpath($imgpath.'/'.$value));

	// 	} else if( $extension == 'json' ) {

	// 	}

	// }
	// $thumbs = Array();
	// $thumbs["thumbs"] = $galleryimages;
	// file_put_contents('gallery/images.json', json_encode($thumbs));



?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="en,cz">
        <meta name="description" content="Architekti3">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Architekti3</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/gallery.css">
        <link rel="author" href="Jakob Schlötter">
        <link rel="icon" 
          type="image/png" 
          href="favicon.png">
    </head>
    <body id="body">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/util.js"></script>
        <script src="js/flowtype.js"></script>

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
       
        <div id="menu">
	        <a href="#"><div id="menu_logo" class="menuitem" width="50" height="50"><img id="menu_logoimg" src="util/A3_logo_368x70.png" onerror="this.src='util/A3_logo_368x70.png'"></div></a>
	        <div id="menuas">
				<div class="menuitem dropTheShadow" id="menuGallery"><a href="gallery.php">GALLERY</a></div>
				<div class="menuitem dropTheShadow" id="menuFacebook"><a target="_blank" href="https://www.facebook.com/Architekti3/">FACEBOOK</a></div>
				<div class="menuitem dropTheShadow" id="menuBlog"><a target="_blank" href="http://architektjanicek.tumblr.com">BLOG</a></div>
			</div>
		</div>

        <div id="content">
        	<!-- <h1>Wang Motorcycles</h1> -->
            <div class="content_text">
                <p lang="cz" class="cz">(cz)<br>
                    <?php
                    echo htmlentities('architektonická kancelář s designovým obchodem a nejlepší kávou ve městě!');
                    ?><br>
                </p>
            </div>
            <div class="content_text">
                <p lang="en" class="en">(en)<br>architecture bureau with a design shop and the best coffee in town!</p>
            </div>
            <div class="content_text">
                                <p class="contact">contact<br>
                                <b>Architekti3</b><br>
                                J. Palacha 954/4<br>
                                669 02 Znojmo<br>
                                Czech Republic<br><br>
                                <?php
                                echo htmlentities('Ing. arch. Jindřich Janíček');
                                ?><br>
                                +420 603 242 540<br>
                                janicek@architekti3.cz<br><br>
                                 
                                <?php
                                echo htmlentities('Ing. arch. Kamil Švaříček');
                                ?><br>
                                +420 731 160 025<br>
                                svaricek@architekti3.cz<br><br>

                                <!-- <span id="email" style="height:1em;background-color:rgba(255, 255, 255, 0.1);cursor:text">e-mail</span><br> -->
                                <iframe id="contactMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.0555564882934!2d16.05100211549785!3d48.857150979287326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d5504265587db%3A0x120a116b4f0f7007!2sJ.+Palacha+954%2F4%2C+669+02+Znojmo%2C+Czech+Republic!5e0!3m2!1sen!2snl!4v1454864830303" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>               </p>
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
        <script src="js/main.js"></script>
    </body>
</html>