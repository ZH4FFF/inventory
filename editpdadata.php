<?php
session_start();
//check if session exists
if(isset($_SESSION["UID"])) {
?>

<!DOCTYPE html>
<html>
<body?>

<?php
$Pda =$_POST["pda"];
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

    else{
        $QueryView = "select * from data_pda where ID = '".$Pda."'";
        $resultQ = $conn->query($QueryView);
        
        if ($resultQ->num_rows > 0) {
                while($rows = $resultQ->fetch_assoc()) {
    ?>

<h1>Update Form</h1>

<form action="pdaEditverify.php" method="post">

<br>
<br>

NSS: <input type="text" name="NSS" value="<?php echo $rows['NSS'];?>" maxlength="20" required">
<br>
<br>
TC56 <input type="text" name="TC56" value="<?php echo $rows['TC56'];?>" maxlength="20" required">
<?php $TC56 = $rows['TC56'];?>
<br>
<br>
PO: <input type="text" name="PO" value="<?php echo $rows['PO'];?>" maxlength="20" required">
<br>
<br>
Invoice No: <input type="invoice" name="INVOICE_NO" value="<?php echo $rows['Invoice_No'];?>" maxlength="20" required">
<br>
<br>
Type Unit: <input type="text" name="Type_Unit" value="<?php echo $rows['Type_Unit'];?>" maxlength="20" required">
<br>
<br>
<br>
Asset No: <input type="text" name="ASSET_NO" value="<?php echo $rows['Asset_No'];?>" maxlength="20" required">
<br>
<br>

Part No: <input type="text" name="PART_NO" value="<?php echo $rows['Part_No'];?>" maxlength="20" required">
<br>
<br>
Warranty: <input type="text" name="Warranty" value="<?php echo $rows['Warranty'];?>" maxlength="20" required">
<br>
<br>
State: <input type="text" name="State" value="<?php echo $rows['State'];?>" maxlength="20" required">
<br>
<br>
Station: <input type="text" name="STATION" value="<?php echo $rows['Station'];?>" maxlength="20" required">
<br>
<br>
Meter Reader : <input type="text" name="METER_READER" value="<?php echo $rows['Meter_Reader'];?>" maxlength="20" required">
<br>
<br>
Staff ID : <input type="text" name="Staff_ID" value="<?php echo $rows['Staff_ID'];?>" maxlength="20" required">
<br>
<br>


<?php
			}
	}
}
$conn->close();
?>

</body>
</html>
<?php


?>

<button type="submit" >Submit</button>


</form>
</body>
</html>
<?php
}
else
{
echo "No session exists or session has expired. Please
log in again.<br>";
echo "<a href=login.html> Login </a>";
}
?>