<?php
$servername = "eesdb.database.windows.net"; // hostname
$username = "ryaned15"; // MySQL username
$password = "Titleist5"; // MySQL password
$dbname = "ees_db"; // MySQL database name (optional)

$conn= new mysqli($servername, $username, $password, $dbname)or die("Could not connect to mysql".mysqli_error($con));
