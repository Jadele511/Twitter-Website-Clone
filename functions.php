<?php

session_start();

include("connection.php");

if ($_GET['function'] == "logout") {

  session_unset();
}

?>
