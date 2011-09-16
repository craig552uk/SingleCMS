<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Editor</title>
    <link rel="stylesheet" href="../css/bootstrap-1.2.0.min.css">
    <script src="../js/jquery-1.6.3.min.js"></script>
    <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Fade out alert messages
            $('.alert-message').delay(2000).fadeOut();
            
            // Tiny MCE Editor
            tinyMCE.init({
                mode : "textareas",
                theme : "advanced",
                        
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
                    <li><a href="../">View Site</a></li>
                    <li><a href="?action=logout">Logout</a></li>
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
                        <p class="help-block" style="max-width:100%;">Allowed tags <em><?php echo htmlspecialchars($allowed_tags); ?></em></p>
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" class="btn primary" value="Save Changes">
                    <a href="." class="btn">Revert</a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
