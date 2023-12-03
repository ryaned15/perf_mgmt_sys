<?php
$serverName = "eesdb.database.windows.net"; // Replace with your server name
$databaseName = "ees_db"; // Replace with your database name
$username = "ryaned15"; // Replace with your username
$password = "Titleist5"; // Replace with your password

$connectionOptions = array(
    "Database" => $databaseName,
    "Uid" => $username,
    "PWD" => $password
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
