<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CMS</title>
</head>
<body>

    <form method="POST" action="?action=login">
        <?php if(isset($login_error)): ?>
            <p class="error"><?php echo $login_error; ?></p>
        <?php endif; ?>
        <p><input type="text" name="username" id="username"></p>
        <p><input type="password" name="password" id="password"></p>
        <p><input type="submit" value="Login"></p>
    </form>

</body>
</html>
