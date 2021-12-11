<?php
$ser="localhost";
$user="root";
$pa="";
$db="attmgsystem";
$con=mysqli_connect($ser,$user,$pa,$db);

if($con)
echo "";
else
echo "not connected";

// error_reporting(0);
// mysql_connect('localhost','root','') or die('Cannot connect to server');
// mysql_select_db('attmgsystem') or die ('Cannot found database');
?>