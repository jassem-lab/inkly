<?php
session_start();
session_destroy();

header('location:../website/login.php');

?>