<?php
$serverName = "eesdb.database.windows.net";
$connectionOptions = array(
    "Database" => "ees_db",
    "Uid" => "ryaned15",
    "PWD" => "Titleist5"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
   return $conn; 
}
?>

