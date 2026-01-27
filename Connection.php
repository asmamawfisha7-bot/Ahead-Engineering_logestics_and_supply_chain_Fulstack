<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'stock';

// connect to the database
$query = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>