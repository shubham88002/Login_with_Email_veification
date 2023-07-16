<?php

$servername="localhost";
$username="root";
$password="";
$dbname="theemwiz";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if($conn){

 

}
else{

    die("connection is Failed due to " .mysqli_connect_error());
}
?>