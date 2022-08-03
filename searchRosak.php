<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js">
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
  
body {

    
	 background-image: url(" ");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
    </style>
 </head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="view.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
if(isset($_POST['search'])){
$find = $_POST['find'];

//declare DB connection variables
$host="localhost"; //host name
$user = "root"; //database userid
$pass = ""; //database pwd
$db = "tiber";// please write your DB name

// Create connection 
$conn = new mysqli ($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) 
{   
    //to check if DB connection IS NOT OK 
    die ("Connection failed:" .$conn->connect_error);
}
else
{
    //connection OK get records for the selected PET
    $queryGet = "SELECT * FROM data_rosak WHERE State   like '%".$find."%' ";  

    $resultGet = $conn->query($queryGet);
    
    //to execute $queryView query & assign query result to $resultGet $resultGet = $conn->query($queryGet);
    

    if ($resultGet->num_rows > 0) {
        while($row = $resultGet->fetch_assoc()) {
            ?>
            <br><br>

            <div class="table-responsive-sm">
  <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>NSS</th>
                <th>State</th>
                <th>Station</th>
                <th>NSS Tag</th>
                <th>Item</th>
                <th>Serial Number Item</th>
                <th>Battery Included</th>
                <th>Damage</th>
                <th>Date of received Report</th>
                <th>Call Vendor</th>
                <th>Vendor take</th>
                <th>Vendro Return</th>
                <th>Days V</th>
                <th>By</th>
                <th>Method</th>
                <th>SR#</th>
                <th>Status</th>
            </tr>
        </thead>
     <tbody>
            <tr>
                <td><?php echo$row['No'];?></td>
                <td><?php echo$row['NSS'];?></td>
                <td><?php echo$row['State'];?></td>
                <td><?php echo$row['Stesen'];?></td>
                <td><?php echo$row['NSS_Tag'];?></td>
                <td><?php echo$row['Item'];?></td>
                <td><?php echo$row['Serial_Number_Item'];?></td>
                <td><?php echo$row['Batt Include'];?></td>
                <td><?php echo$row['Kerosakan'];?></td>
                <td><?php echo$row['Laporan Terima'];?></td>
                <td><?php echo$row['Call Vendor'];?></td>
                <td><?php echo$row['Vendor Ambil'];?></td>
                <td><?php echo$row['Vendor Pulang'];?></td>
                <td><?php echo$row['Days V'];?></td>
                <td><?php echo$row['By'];?></td>
                <td><?php echo$row['Method'];?></td>
                <td><?php echo$row['SR#'];?></td>
                <td><?php echo$row['Status'];?></td>

                
            </tr>
            </table>
</div>

    <?php
        } 
    }  
    else
    {
        echo "No data!";
    }
    
    
}
}
?>
<button type="button" class="backbtn" onclick="history.back();" value="Back">Back</button>

</body>
</html>

  