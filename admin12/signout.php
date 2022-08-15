<?php

session_start();
unset($_SESSION["logged_in"]);
unset($_SESSION["username"]);
header("Location:admin_login.php");
