<?php
$serverName = "eesdb.database.windows.net";
$connectionOptions = array(
    "Database" => "ees_db",
    "Uid" => "ryaned15",
    "PWD" => "Titleist5"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check connection
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
