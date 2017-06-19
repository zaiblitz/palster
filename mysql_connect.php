<?php
$con = mysqli_connect("localhost","root","3a1403197c4445f6567802cae59d5b37e0631de04245d2f1","zcon");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

var_dump($con);
?>
