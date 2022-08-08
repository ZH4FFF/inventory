<?php
$nss=$_POST['NSS'];
$State=$_POST['State'];
$Station=$_POST['Stesen'];
$NSS_Tag=$_POST['NSS_Tag'];
$Item=$_POST['Item'];
$Serial_Number_Item=$_POST['Serial_Number_Item'];
$Batt_Include=$_POST['Batt_Include'];
$Kerosakan=$_POST['Kerosakan'];
$Date_Report =$_POST['Laporan_Terima'];
$Call_Vendor=$_POST['Call_Vendor'];
$Vendor_Ambil=$_POST['Vendor_Ambil'];
$Vendor_Pulang=$_POST['Vendor_Pulang'];
$Days_V=$_POST['Vendor_Pulang'];
$Days_All=$_POST['Days_All'];
$By=$_POST['By'];
$Method=$_POST['Method'];
$SR=$_POST['SR#'];
$Status=$_POST['Status'];
$Remark=$_POST['Remark'];

?>


<head>
	<style>
		body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

		</style>
</head>


<body>
NSS:<?php echo $nss;?>

<br><br>

State:<?php echo $State;?>

<br><br>

Station:<?php echo $Station;?>

<br><br>

NSS Tag:<?php echo $NSS_Tag;?>

<br><br>

Item:<?php echo $Item;?>

<br>
<br>
Serial Number :<?php echo $Serial_Number_Item;?>
<br>
<br>
Battery Included ? :<?php echo $Batt_Include;?>
<br>
<br>

Damage :<?php echo $Kerosakan;?>
<br>
<br>

Date report :<?php echo $Date_Report;?>
<br>
<br>
Date of Vendor Call :<?php echo $Call_Vendor;?>
<br>
<br>
Date of Vendor Take :<?php echo $Vendor_Ambil;?>
<br>
<br>
Date of Vendor Return :<?php echo $Vendor_Pulang;?>
<br>
<br>
Days All :<?php echo $Days_All;?>
<br>
<br>
By :<?php echo $By;?>
<br>
<br>
Method :<?php echo $Method;?>
<br>
<br>
SR# :<?php echo $SR;?>
<br>
<br>
Status :<?php echo $Status;?>
<br>
<br>
Remark :<?php echo $Remark;?>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiber";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}
else 
{
	$queryinsert="Insert into data_rosak(NSS,State,Stesen,NSS_Tag,Item,Serial_Number_Item, Batt_Include ,Kerosakan,Laporan_Terima,Call_Vendor,Vendor_Ambil,Vendor_Pulang)
	values('".$nss."', '".$State."','".$Station."', '".$NSS_Tag."','".$Item."','".$Serial_Number_Item."','".$Batt_Include."','".$Kerosakan."','".$Date_Report."','".$Call_Vendor."','".$Vendor_Ambil."','".$Vendor_Pulang."')";

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
echo "<button onclick='history.back()'>Go Back</button>";
echo "<br>";
echo "<br>";
echo "<a href=menu.php> Menu</a>";
echo "<br>";
echo "<br>";
echo "<a href=practice.html> Login </a>";
?>
