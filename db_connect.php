<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:eesdb.database.windows.net,1433; Database = ees_db", "ryaned15", "Titleist5");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Example query
    $sql = "SELECT * FROM system_settings";
    $stmt = $conn->query($sql);

    // Fetch data
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Process the row data
        print_r($row);
    }
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
