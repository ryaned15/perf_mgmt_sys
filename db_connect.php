<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:eesdb.database.windows.net,1433; Database = pms_db", "redmonds2315@gmail.com", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "redmonds2315@gmail.com@eesdb", "pwd" => "{your_password_here}", "Database" => "pms_db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:eesdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
