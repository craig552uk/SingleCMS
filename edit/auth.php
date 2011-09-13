<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?> - Login</title>
    <link rel="stylesheet" href="../css/bootstrap-1.2.0.min.css">
</head>
<body>
    <div class="topbar">
        <div class="topbar-inner">
            <div class="container">
                <h3><a href="../"><?php echo $site_title; ?></a></h3>
                <ul class="nav secondary-nav">
                    <li><a href="../">View Site</a></li>
                </ul>
            </div><!-- .container -->
        </div><!-- .topbar-inner-->
    </div><!-- .topbar-->
    
    <div class="container" style="margin-top: 40px;">
        <form method="POST" action="?action=login">
            <fieldset>
                <?php if(isset($login_error)): ?>
                    <p class="alert-message error"><?php echo $login_error; ?></p>
                <?php endif; ?>
                <div class="clearfix">
                    <label for="username">User Name</label>
                    <div class="input">
                        <input type="text" name="username" id="username">
                    </div>
                </div>
                <div class="clearfix">
                    <label for="password">Password</label>
                    <div class="input">
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" class="btn primary" value="Login">
                    <a href="../" class="btn">Cancel</a>
                </div>
            </fieldset>
        </form>
    </div><!-- .container -->
</body>
</html>
