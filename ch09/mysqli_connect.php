<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
$username=getenv('MYSQL_USER');
$password=getenv('MYSQL_PASSWORD');
$mysql_host=getenv('MYSQL_SERVICE_HOST');
$sitename=getenv('MYSQL_DATABASE');
// DEFINE ('DB_USER', 'username');
// DEFINE ('DB_PASSWORD', 'password');
// DEFINE ('DB_HOST', 'localhost');
// DEFINE ('DB_NAME', 'sitename');

echo "Environment vars:<br>";
echo "username = $username<br>";
echo "password = $password<br>";
echo "mysql_host = $mysql_host<br>";
echo "sitename = $sitename<br>";

// Make the connection:
// $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
# $dbc = @mysqli_connect ($mysql_host, $username, $password, $sitename) OR die ('mysqli_connect: Could not connect to MySQL: ' . mysqli_connect_error() );
$dbc = new mysqli ($mysql_host, $username, $password, $sitename) OR die ('mysqli_connect: Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
// mysqli_set_charset($dbc, 'utf8');

// echo "Host information: " . mysqli_get_host_info($dbc) . PHP_EOL;
echo "<br>Host information: " . $dbc->host_info . PHP_EOL;
echo "<br>Server information: " . $dbc->server_info . PHP_EOL;
echo "<br>client : " . $dbc->client_info . PHP_EOL;
echo "<br>proto_info : " . $dbc->proto_info . PHP_EOL;


mysqli_close($dbc);

