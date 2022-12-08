<?php

session_start();
// $userid = $_SESSION['userid'] = "dmstjfgus";
unset($_SESSION['userid']);

?>

<p>넘어온 세션 : <?=$userid?>입니다</p>