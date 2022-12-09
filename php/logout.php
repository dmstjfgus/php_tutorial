<?php

session_start();
// $userid = $_SESSION['userid'] = "dmstjfgus";
unset($_SESSION['user']);

echo "
    <script>
        location.href='/php_lecture/index.php';
    </script>
"

?>
