<!DOCTYPE html>
<html>
<head>
    <title>Josef Müller-Brockmann</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<!-- #Mobile Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1">

<!-- #HTML5 Support -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
<!-- #Stylesheets -->
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen,projection" />
    <link href="js/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

<!-- #Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/bce2hnh.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/menu.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/ajaxExternal.js"></script>
    <script src="js/jquery.bxslider.js"></script>

</head>

<body>

    <div class="container">
        
        <aside class="leftPanel">
            
           <?php include('home-aside.html'); ?>
        
        </aside>
    
        <div id="wrapper">
            
            <?php include('menu.html'); ?>
             
            <div id="content">
                
                <div id="load"></div>
                
                <?php include('biography.html'); ?>
            
            </div><!-- /content -->
    
        </div><!-- /wrapper -->
    
    </div><!-- /container -->


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