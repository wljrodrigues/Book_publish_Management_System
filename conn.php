<?php
$server="localhost";
$username="root";
$password="";
$database="library_management";

$conn=new mysqli($server,$username,$password,$database);

if($conn->connect_error)
{
    echo "connection error".$conn->connect_error."";
}
else
{
    return $conn;
}
?>