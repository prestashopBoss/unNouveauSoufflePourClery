<?php

session_start();
$_SESSION = array();
session_destroy();
echo '<script> location.replace("http://clery-info.fr/article.php");</script>';

?>