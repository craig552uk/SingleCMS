<?php include('config.php'); /* Load the config file */ ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $site_langage; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $site_langage; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $site_langage; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $site_langage; ?>"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="author" content="<?php echo $site_author; ?>">

    <!-- Styles applied here should also be applied in TinyMCE editor /edit/editor.php ln 20 -->
    <link rel="stylesheet" href="css/bootstrap-1.2.0.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/modernizr-2.0.6.min.js"></script>
    <script src="js/jquery-1.6.3.min.js"></script>
</head>

<body>

    <div class="container">
        <header>
            <h1><?php echo $site_title; ?></h1>
        </header>
        <div id="main" role="main">
            <?php include('body.txt'); /* Load the body content */ ?>
        </div>
        <footer>
            <a href="edit/">Edit</a>
        </footer>
    </div> <!-- .container -->

    <script>
        var _gaq=[['_setAccount','<?php echo $google_analytics_code; ?>'],['_trackPageview'],['_trackPageLoadTime']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

</body>
</html>
