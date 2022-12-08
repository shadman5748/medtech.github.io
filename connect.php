<?php

// Connecting the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

// Creating Database Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Checking the Connection
if(!$conn)
{
    die("Sorry We are failled to connect the database: " . mysqli_connect_error());
}

else
{
    echo "Connection was succesfull <br>";
}

// SQL QUery
$sql = "INSERT INTO `news`(`id`, `email`) VALUES ('1','test')";
$result = mysqli_query($conn, $sql);

// Testing result
if($result)
{
    echo "Succesfully Inserted";
}

else
{
    echo "Error while inserting. Error------> " . mysqli_error($conn);
}

?>