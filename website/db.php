<?php
$config = include('../config.php');


$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
?>
