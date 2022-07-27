<!DOCTYPE HTML>
<html>
<?php
$name=$_POST['name'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Website=$_POST['website'];
$Comment=$_POST['comment'];
?>
<head>
	<style>
		body {
  background-image: url('welcome.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color:white;
  </p>
}

		</style>
</head>


<body>
UserName:<?php echo $name;?>

<br><br>

Email:<?php echo $Email;?>

<br><br>

password:<?php echo $Password;?>

<br><br>

Website:<?php echo $Website;?>

<br><br>

Comment:<?php echo $Comment;?>


<br><br>

<?php

$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "tiber";


$conn=new mysqli($servername,$username,$psw,$dbname);

if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}
else 
{
	$queryinsert="Insert into info(Name,Email,Password,Website,Comment)
	values('".$name."', '".$Email."','".$Password."', '".$Website."', '".$Comment."')";

if($conn->query($queryinsert)==TRUE)
{
	echo "<p style='color:blue;'>success insert Record</p>";
}
else
{
	echo"<p style='color:red;'>Error:invalid query".$conn->error."</p>";
}
}
$conn->close();
echo "<a href=practice.html> Login </a>";
?>

