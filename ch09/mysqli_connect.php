<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
$username=getenv('MYSQL_USER');
$password=getenv('MYSQL_PASSWORD');
$localhost=getenv('MYSQL_HOST');
$sitename=getenv('MYSQL_DATABASE');
// DEFINE ('DB_USER', 'username');
// DEFINE ('DB_PASSWORD', 'password');
// DEFINE ('DB_HOST', 'localhost');
// DEFINE ('DB_NAME', 'sitename');

echo "Environment vars:<br>";
echo "username = $username<br>";
echo "password = $password<br>";
echo "localhost = $localhost<br>";
echo "sitename = $sitename<br>";

// Make the connection:
// $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
$dbc = @mysqli_connect ($localhost, $username, $password, $sitename) OR die ('mysqli_connect: Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');
