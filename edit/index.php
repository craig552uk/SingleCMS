<?php
session_start();
include('../config.php');

if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'login':           /* Authentication attempt */
                if ((isset($_POST['username']))
                && (isset($_POST['password']))
                && ($_POST['username']===$username)
                && ($_POST['password']===$password))
                {
                    $_SESSION['user']=true;
                }else{
                    $login_error=$error_auth_failed;
                }
                break;
            case 'logout':          /* End session */
                session_unset();
                session_destroy();
                break;
            case 'save':            /* Save changes */
                if (file_put_contents('../body.txt', strip_tags($_POST['content'].' ', $allowed_tags))){
                    $editor_msg = $editor_save_success;
                }else{
                    $editor_error = $editor_save_error;
                }
                break;
    }
}


if(!isset($_SESSION['user'])){      /* Not logged in */
    // Show login form
    include('auth.php');
}else{                              /* Logged in */

    // Load content from file
    $content = file_get_contents('../body.txt');
    
    // Show form
    include('editor.php');
}

