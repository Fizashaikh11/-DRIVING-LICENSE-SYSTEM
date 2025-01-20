
<?php
$connection = mysqli_connect("localhost", "root", "", "dbms_p1", 3306);

// Check connection
if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Select database
$select_db = mysqli_select_db($connection, 'dbms_p1');
if (!$select_db) {
    die("Database Selection Failed: " . mysqli_error($connection));
}

// If you reach this point, the connection and database selection were successful
echo "Database connected successfully!";
?>

