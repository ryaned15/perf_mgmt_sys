<?php
$serverName = "eesdb.database.windows.net";
$connectionOptions = array(
    "Database" => "pms_db",
    "Uid" => "redmonds2315@gmail.com",
    "PWD" => "TitlEist5"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));

?>
