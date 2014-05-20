<?php
/* 
* @Author: raine_v
* @Date:   2014-05-20 02:10:09
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-21 00:22:02
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My CMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="<?php echo BASE_URL.'/webroot/css/style.css';?>" rel="stylesheet" media="screen">
  <link href="<?php echo BASE_URL.'/webroot/css/bootstrap.min.css';?>" rel="stylesheet" media="screen">
  <link href="<?php echo BASE_URL.'/webroot/css/color-default.css';?>" rel="stylesheet" media="screen">
  <link href="<?php echo BASE_URL.'/webroot/css/width-full.css';?>" rel="stylesheet" media="screen">


</head>
<body>
  
  <div class="container">
    <?php echo $content_for_layout; ?>
  </div> <!-- /container -->

  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo BASE_URL.'/ webroot/js/bootstrap.js'; ?>" type="text/javascript" charset="utf-8" ></script>
<script src="<?php echo BASE_URL.'/ webroot/js/bootstrap.min.js'; ?>" type="text/javascript" charset="utf-8" ></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</body>
</html>