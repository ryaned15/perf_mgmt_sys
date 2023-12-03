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
    echo "Connected to Azure SQL Database!";
    // Perform operations here
    // Example: query execution
    $query = "SELECT * FROM system_settings";
    $stmt = sqlsrv_query($conn, $query);
    // Handle query results
    // ...
}

