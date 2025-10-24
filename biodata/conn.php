<?php
// PARAMETER DATABASE
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'biodata');

// QUERY CONNECTION
$conn = mysqli_connect(HOST, USER, PASS, DB) or die('koneksi bermasalah');
?> 