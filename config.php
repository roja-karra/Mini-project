<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "comment_sys_tutorial";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>