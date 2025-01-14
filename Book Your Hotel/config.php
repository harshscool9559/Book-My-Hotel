<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bluebirdhotel";

$conn = mysqli_connect('localhost', 'root', '', 'bluebirdhotel', '3307');


if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>