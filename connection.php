<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result_demo";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "";
}
else
{
    die("Connection failed because ".mysql_connect_error());
}
?>
