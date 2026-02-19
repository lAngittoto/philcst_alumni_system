<?php
 session_start();
        session_destroy();
        header('Location: /philcst-alumni-system/public/login');
        exit;
?>