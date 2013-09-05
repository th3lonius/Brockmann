<!DOCTYPE html>
<html>
<head>
    <title>Josef Müller-Brockmann</title>
<!-- #Mobile Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1">

<!-- #HTML5 Support -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- #Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/bce2hnh.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/scripts.js"></script>

<!-- #Stylesheets -->
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen,projection" />

</head>

<body>

<div class="container">
    
    <aside id="current_issue" class="leftPanel">
        <h2><a class="slideLeft" href="#">Josef Müller-Brockmann</a></h2>
        <ul id="issue_features">
            <li><a href="#">on the meaning of corndodgers</a></li>
            <li><a href="#">time marches on..</a></li>
            <li><a href="#">interview with Ariel Vromen</a></li>
        </ul>
    </aside>

    <div class="wrapper">
        
<?php include('menu.php'); ?>
        
<?php
	$page = $_GET['page'];
	$pages = array('biography', 'gallery', 'press');
	if (!empty($page)) {
		if(in_array($page,$pages)) {
			$page .= '.php';
			include($page);
		}
		else {
		echo 'Page not found. Return to
		<a href="index.php">index</a>';
		}
	}
	else {
		include('biography.php');
	}
?>


    </div>




</div>



<script src="js/backstretch.min.js"></script>
<script>
  $.backstretch([
      "http://farm3.staticflickr.com/2018/2256310902_21945de06d_o.jpg", 
      "http://www.jonmartin.co.nz/Images/detail/type_large2.jpg", 
      "http://jaseisace.files.wordpress.com/2007/10/beethoven.jpg", 
      "http://jamesbrook.files.wordpress.com/2010/12/josefmuellerbrockman11.jpg", 
      "http://www.plakatwp.ch/images/M%C3%BCller-Brockmann-02.jpg"
  ], {duration: 3000, fade: 750});
</script>
</body>
</html>