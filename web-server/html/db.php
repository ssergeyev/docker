<?php

ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
ini_set("html_errors", 1);
ini_set("log_errors", 1);
error_reporting(E_ERROR | E_PARSE | E_WARNING);

$con = mysqli_connect('maria_db', 'dbuser', 'docker_db_password', 'docker_db');

?>
