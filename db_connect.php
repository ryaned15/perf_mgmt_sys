<?php
$serverName = "eesdb.database.windows.net";
$connectionOptions = array(
    "Database" => "ees_db",
    "Uid" => "ryaned15",
    "PWD" => "Titleist5"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

