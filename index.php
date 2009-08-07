<?php
    $files = glob("clips/*.ogg")
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ClouserW Soundboard</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/base/base-min.css"> 
	<style type="text/css" media="screen">
	   .button {
	       -moz-border-radius: 5px;
	       background: red;
	       border: 3px solid black;
	       display: inline-block;
	       cursor: pointer;
	       padding: 3px 5px;
	       margin: 5px;
	   }
	   
	   html {
	       background: url(http://farm4.static.flickr.com/3112/2721341322_e73bca6a9e_b.jpg);
	   }
	   
	   h1 {
	       color: white;
	   }
	</style>
	
	
</head>
<body>
    <div id="doc">
        <h1>ClouserW Soundboard</h1>
        <!-- JS here to prevent 'flash' of all the default audio players -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                $("audio").removeAttr("controls").each(function(i, audioElement) {
                    var audio = $(this);
                    var that = this; //closure to keep reference to current audio tag
                    $("#doc").append($('<button class="button">'+audio.attr("title")+'</button>').click(function() {
                        that.play();
                    }));
                });
            });
        </script>
        <?php foreach($files as $file) { ?>
            <?php $title = str_replace(".ogg", "", str_replace("clips/", "", $file)); ?>
            <audio src="<?php echo $file; ?>" controls autobuffer="true" title="<?php echo $title ?>"></audio>
        <?php } ?>
    </div>
    
</body>
</html>
