<?php
session_start();

define('SITEURL', "http://localhost/project_1/"); // ! change it to your local or website address.
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nikoosabt_db');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));

$selectDatabase = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));





