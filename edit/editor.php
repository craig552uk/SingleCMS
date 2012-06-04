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
            $('.alert-message').delay(2000).fadeOut();

            // Tiny MCE Editor
            tinyMCE.init({
                mode : "textareas",
                theme : "advanced",

                // Styles applied within editor
                content_css : "../css/bootstrap-1.2.0.min.css,../css/style.css",

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
    <div class="topbar">
        <div class="topbar-inner">
            <div class="container">
                <h3><a href="../"><?php echo $site_title; ?></a></h3>
                <ul class="nav secondary-nav">
                    <li><a href="../"><?php echo $editor_button_view; ?></a></li>
                    <li><a href="?action=logout"><?php echo $editor_button_logout; ?></a></li>
                </ul>
            </div><!-- .container -->
        </div><!-- .topbar-inner-->
    </div><!-- .topbar-->

    <div class="container" style="margin-top: 40px;">
        <form method="POST" action="?action=save" class="form-stacked">
            <fieldset>
                <div class="clearfix">
                    <?php if(isset($editor_error)): ?>
                        <p class="alert-message error"><?php echo $editor_error; ?></p>
                    <?php endif; ?>
                    <?php if(isset($editor_msg)): ?>
                        <p class="alert-message success"><?php echo $editor_msg; ?></p>
                    <?php endif; ?>
                </div>
                <div class="clearfix">
                    <!--<label for="content">Page Content</label>-->
                    <div class="input">
                        <textarea class="tinymce" name="content" id="content" style="width: 920px; height: 500px;"><?php echo $content; ?></textarea>
                        <p class="help-block" style="max-width:100%;"><?php echo $editor_help_tags; ?> <em><?php echo htmlspecialchars($allowed_tags); ?></em></p>
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" class="btn primary" value="<?php echo $editor_button_save ?>">
                    <a href="." class="btn"><?php echo $editor_button_revert; ?></a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
