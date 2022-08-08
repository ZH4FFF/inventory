<?php
$nss=$_POST['NSS'];
$tc56=$_POST['TC56'];
$po=$_POST['PO'];
$Invoice_No=$_POST['INVOICE_NO'];
$Type_Unit=$_POST['Type_Unit'];
$ASSET_NO=$_POST['ASSET_NO'];
$Part_NO=$_POST['PART_NO'];
$Warranty=$_POST['Warranty'];
$State =$_POST['State'];
$Station=$_POST['STATION'];
$Meter_Reader=$_POST['METER_READER'];
$Staff_ID=$_POST['Staff_ID'];
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
    $queryUpdate ="UPDATE  data_pda SET NSS='".$nss."',TC56='".$tc56."',PO='".$po."',INVOICE_NO='".$Invoice_No."',Type_Unit='".$Type_Unit."',ASSET_NO='".$ASSET_NO."',PART_NO='".$Part_NO."',Warranty='".$Warranty."',State='".$State."',Station='".$Station."',METER_READER='".$Meter_Reader."',Staff_ID='".$Staff_ID."' WHERE Staff_ID='".$Staff_ID."' ";
	
	$resultUpdate=mysqli_query($conn, $queryUpdate);
	if(!$resultUpdate)
	{
		die("Query problems : ".mysqli_error($conn));
	}
	else
	{
		echo "Record has been updated into database.";
		echo "<br><br>";
		echo "Click<a href='view.php'>here</a>to view pda list";
		}
	
}
?>

