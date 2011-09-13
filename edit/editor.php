<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Editor</title>
    <link rel="stylesheet" href="../bootstrap-1.2.0.min.css">
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
                <?php if(isset($editor_error)): ?>
                    <p class="alert-message error"><?php echo $editor_error; ?></p>
                <?php endif; ?>
                <?php if(isset($editor_msg)): ?>
                    <p class="alert-message success"><?php echo $editor_msg; ?></p>
                <?php endif; ?>
                <div class="clearfix">
                    <label for="content">Page Content</label>
                    <div class="input">
                        <textarea name="content" id="content" style="width: 95%; height: 300px;"><?php echo $content; ?></textarea>
                        <p class="help-block">Allowed tags <em><?php echo htmlspecialchars($allowed_tags); ?></em></p>
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
