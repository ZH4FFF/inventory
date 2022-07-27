<?php
$nss=$_POST['NSS'];
$ZQ520=$_POST['ZQ520'];
$po=$_POST['PO'];
$Invoice_No=$_POST['Invoice_No'];
$Type_Unit=$_POST['Type_Unit'];
$ASSET_NO=$_POST['Asset_No'];
$Part_NO=$_POST['Part_No'];
$Warranty=$_POST['Warranty'];
$State =$_POST['Current_State'];
$Station=$_POST['Current_Station'];
$Meter_Reader=$_POST['Current_Meter_Reader'];
$Staff_ID=$_POST['Staff_ID'];

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
UserName:<?php echo $nss;?>

<br><br>

TC56:<?php echo $ZQ520;?>

<br><br>

PO:<?php echo $po;?>

<br><br>

Invoice No:<?php echo $Invoice_No;?>

<br><br>

Type Unit:<?php echo $Type_Unit;?>

<br>
<br>
Part No :<?php echo $Part_NO;?>
<br>
<br>
Warranty :<?php echo $Warranty;?>
<br>
<br>

State :<?php echo $State;?>
<br>
<br>

Station :<?php echo $Station;?>
<br>
<br>
Meter Reader :<?php echo $Meter_Reader;?>
<br>
<br>
Staff ID :<?php echo $Staff_ID;?>


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
	$queryinsert="Insert into data_prt(NSS,ZQ520,PO,INVOICE_NO,TYPE_UNIT,ASSET_NO,PART_NO,WARRANTY,STATE,STATION,METER_READER,STAFF_ID)
	values('".$nss."', '".$ZQ520."','".$po."', '".$Invoice_No."','".$Type_Unit."','".$ASSET_NO."','".$Part_NO."','".$Warranty."','".$State."','".$Station."','".$Meter_Reader."','".$Staff_ID."')";

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
