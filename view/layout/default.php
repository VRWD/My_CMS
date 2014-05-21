<?php
/* 
* @Author: raine_v
* @Date:   2014-05-20 02:10:09
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-21 04:53:36
*/
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8">
  <title>My CMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Mon CSM Personnel basé sur un système MVC">
  <meta name="author" content="Vincent Raine">

  <!-- Le styles -->
  <link href="<?php echo BASE_URL.'/webroot/bootstrap/dist/css/bootstrap.css'?>" rel="stylesheet">
  <link href="<?php echo BASE_URL.'/webroot/bootstrap/dist/css/carousel.css'?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo BASE_URL.'/webroot/bootstrap/assets/js/html5shiv.js'?>"></script>
      <script src="<?php echo BASE_URL.'/webroot/bootstrap/assets/js/respond.min.js'?>"></script>
    <![endif]-->
    
<!-- NAVBAR
================================================== -->
</head>
<?php echo $content_for_layout; ?>
   
        
  
    <!-- ================================================== Le javascript ================================================== -->
  <script type="text/javascript"> Cufon.now(); </script> 
  <script src="<?php echo BASE_URL.'/webroot/bootstrap/assets/js/jquery.js"'; ?>" type="text/javascript" charset="utf-8" ></script>
  <script src="<?php echo BASE_URL.'/webroot/bootstrap/dist/js/bootstrap.min.js'; ?>" type="text/javascript" charset="utf-8" ></script>
  <script src="<?php echo BASE_URL.'/webroot/bootstrap/assets/js/holder.js'; ?>" type="text/javascript" charset="utf-8" ></script>
     
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
  
  </body>
</html>