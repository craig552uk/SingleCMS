<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Login</title>
    <link rel="stylesheet" href="../css/bootstrap-1.2.0.min.css">
    <script src="../js/jquery-1.6.3.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.alert-message').delay(2000).fadeOut();
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
                </ul>
            </div><!-- .container -->
        </div><!-- .topbar-inner-->
    </div><!-- .topbar-->

    <div class="container" style="margin-top: 40px;">
        <form method="POST" action="?action=login">
            <fieldset>
                <div class="clearfix">
                    <?php if(isset($login_error)): ?>
                        <p class="alert-message error"><?php echo $login_error; ?></p>
                    <?php endif; ?>
                </div>
                <div class="clearfix">
                    <label for="username"><?php echo $editor_login_name; ?></label>
                    <div class="input">
                        <input type="text" name="username" id="username">
                    </div>
                </div>
                <div class="clearfix">
                    <label for="password"><?php echo $editor_login_password; ?></label>
                    <div class="input">
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" class="btn primary" value="<?php echo $editor_login_login; ?>">
                    <a href="../" class="btn"><?php echo $editor_button_cancel; ?></a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
