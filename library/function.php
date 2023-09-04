<?php
global $conn;
// Example usage:
$hostname = "localhost"; // Change this to your database hostname
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname   = "foody"; // Change this to your database name



// function conndb($hostname, $username, $password, $dbname)
// {
// Create a connection to the MySQL database
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;
// }

// insert data  function to create a new record

function insertData($conn, $db, $db_col_name, $values)
{
    // Insert the data into the database
    $sql    = "INSERT INTO $db ($db_col_name) VALUES ($values)";
    $result = $conn->query($sql);

    // Check if the record was created successfully
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Create a function to read all records
function read($conn, $db)
{
    // Get all the records from the database
    $sql    = "SELECT * FROM $db";
    $result = $conn->query($sql);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Loop through the records and print them
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    } else {
        return [];
    }
}
//update record

// Update operation
function updateRecord($conn, $db, $value_pairs, $where_condition)
{
    $sql = "UPDATE $db SET $value_pairs WHERE $where_condition";

    if ($conn->query($sql) === true) {
        return true;
    } else {
        return false;
    }
}

// Delete operation
function deleteRecord($conn, $db, $where_condition)
{

    $sql = "DELETE FROM $db, WHERE $where_condition";
    if ($conn->query($sql) === true) {
        return true;
    } else {
        return false;
    }
}
