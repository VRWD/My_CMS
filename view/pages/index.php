<?php
/* 
* @Author: raine_v
* @Date:   2014-05-20 01:32:10
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 03:07:39
*/
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="lang" content="fr">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <title>Mon CMS</title>
    </head>
    <body>
        <div class="container">
            <?php echo $content_for_layout; ?>
        </div>
    </body>
</html>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]= function()
            {
            	(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            	e.src='//www.google-analytics.com/analytics.js';
            	r.parentNode.insertBefore(e,r)
            }
            
            (window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
</html>

