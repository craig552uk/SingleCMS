<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CMS</title>
    <link rel="stylesheet" href="../bootstrap-1.2.0.min.css">
</head>
<body>

    <form method="POST" action="?action=save">
        <?php if(isset($editor_error)): ?>
            <p class="error"><?php echo $editor_error; ?></p>
        <?php endif; ?>
        <?php if(isset($editor_msg)): ?>
            <p class="error"><?php echo $editor_msg; ?></p>
        <?php endif; ?>
        <textarea name="content" id="content"><?php echo $content; ?></textarea>
        <p><input type="submit" value="Save"> <a href="?action=logout">Logout</a></p>
        <p class="blurb">Allowed tags <em><?php echo htmlspecialchars($allowed_tags); ?></em></p>
    </form>

</body>
</html>
