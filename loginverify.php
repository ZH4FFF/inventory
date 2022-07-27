<?php

$name=$_POST['username'];
$Password=$_POST['password'];

$servername = "localhost"; //host name
$username = "root"; //database userid
$psw = ""; //database pwd
$dbname = "tiber";// please write your DB name
// Create connection
$conn = new mysqli($servername, $username, $psw, $dbname);
// Check connection
if ($conn->connect_error) {
 //to check if DB connection IS NOT OK
 die("Connection failed: " . $conn->connect_error);
}
else
{
//connection OK - get records for the selected User account
$queryCheck = "select * from info where name = '".$name."'";
$resultCheck = $conn->query($queryCheck);
if ($resultCheck->num_rows == 0) { //if no record match
echo "<p style='color:red;'>Username does not exists</p>";
echo "<br>Click <a href='practice.html'> here </a> to LOGIN again.";
}
else{
// record matched, get the data
while($row = $resultCheck->fetch_assoc()) {
if( $row["password"] == $Password ) {
//in order to asign, use or destroy session
//calling the session_start() is compulsory
session_start();
//asign userid value to session userid
$_SESSION["UID"] = $name ;
$_SESSION["UserType"] = $row["UserType"];
//redirect to page menu.php
header("Location:menu.php");
}
else
{
echo "<p style='color:red;'>WRONG PASSWORD!!!</p>";
echo "<br>Click <a href='practice.html'> here </a> to LOGIN again.";
}
}
}
$conn->close();
}
?>
