<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.alert').delay(2000).fadeOut();
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
                </ul>
            </div><!-- .container -->
        </div><!-- .navbar-inner-->
    </div><!-- .navpbar-->

    <div class="container" style="margin-top: 80px;">
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
                <div>
                    <input type="submit" class="btn primary" value="<?php echo $editor_login_login; ?>">
                    <a href="../" class="btn"><?php echo $editor_button_cancel; ?></a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
