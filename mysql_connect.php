<?php



$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '3a1403197c4445f6567802cae59d5b37e0631de04245d2f1';
$dbname = 'zcon';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);

print_r($conn);exit;

// mysql_select_db($dbname);
?>