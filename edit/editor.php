<!DOCTYPE html>
<html lang="<?php echo $site_langage; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Editor</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Fade out alert messages
            $('.alert').delay(2000).fadeOut();

            // Tiny MCE Editor
            tinyMCE.init({
            	language : "<?php echo $site_langage; ?>", // change language
                mode : "textareas",
                theme : "advanced",

                // Styles applied within editor
                content_css : "../css/bootstrap.min.css,../css/style.css",

                // Theme options - button# indicated the row# only
                theme_advanced_buttons1 : "fontsizeselect,formatselect,bold,italic,underline,|,justifyleft,justifycenter,justifyright,|,forecolor,backcolor,|,bullist,numlist,|,outdent,indent,|,link,unlink,image,|,code,|,sub,sup,|,charmap,emotions",
                theme_advanced_buttons2 : "",
                theme_advanced_buttons3 : "",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true
            });
        });
    </script>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="../"><?php echo $site_title; ?></a>
                <ul class="nav pull-right">
                    <li><a href="../"><?php echo $editor_button_view; ?></a></li>
                    <li><a href="?action=logout"><?php echo $editor_button_logout; ?></a></li>
                </ul>
            </div><!-- .container -->
        </div><!-- .navbar-inner-->
    </div><!-- .navpbar-->

    <div class="container" style="margin-top: 80px;">
        <form method="POST" action="?action=save">
            <fieldset>
                <div class="clearfix">
                    <?php if(isset($editor_error)): ?>
                        <p class="alert alert-error"><?php echo $editor_error; ?></p>
                    <?php endif; ?>
                    <?php if(isset($editor_msg)): ?>
                        <p class="alert alert-success"><?php echo $editor_msg; ?></p>
                    <?php endif; ?>
                </div>
                <div class="clearfix">
                    <!--<label for="content">Page Content</label>-->
                    <div class="input">
                        <textarea class="tinymce" name="content" id="content" style="width: 920px; height: 500px;"><?php echo $content; ?></textarea>
                        <p style="max-width:100%; margin-top:4px; font-size:90%; color:#999;"><?php echo $editor_help_tags; ?> : <?php echo htmlspecialchars($allowed_tags); ?></p>
                    </div>
                </div>
                <div class="form-actions" style="text-align:right;">
                    <input type="submit" class="btn btn-primary" value="<?php echo $editor_button_save; ?>">
                    <a href="." class="btn"><?php echo $editor_button_revert; ?></a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
