<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="hostel_management";
$port=3307;
$conn=mysqli_connect($servername,$username,$password,$dbname,$port);
if(!$conn)
{
die("Connection Failed:" .mysqli_connect_error());
}
else {
    echo "Connection OK!";
}
?>

