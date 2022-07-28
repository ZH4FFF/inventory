<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<style>
body {

    
	 background-image: url(" ");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
 </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="view.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
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
    $queryGet = "SELECT * FROM data_prt WHERE Staff_ID   like '%".$find."%'  OR Current_Meter_Reader LIKE '%".$find."%' OR ZQ520 LIKE '%".$find."%' OR Current_State LIKE '%".$find."%'  ";  

    $resultGet = $conn->query($queryGet);
    
    //to execute $queryView query & assign query result to $resultGet $resultGet = $conn->query($queryGet);
    

    if ($resultGet->num_rows > 0) {
        while($row = $resultGet->fetch_assoc()) {
            ?>


    <br>
    <div class="container" style="overflow-x:auto;">
  <div class="row">
    <h4 class="search">Search Result For Staff ID : <?php echo $find?></h4>
    <br><br>
    <table id="example" class="table table-bordered" style="width:100%">
<thead>
            <tr>
                <th>ID</th>
                <th>NSS</th>
                <th>ZQ520</th>
                <th>PO</th>
                <th>Invoice No</th>
                <th>Type Unit</th>
                <th>Part No</th>
                <th>Warranty</th>
                <th>State</th>
                <th>Station</th>
                <th>Meter Reader</th>
                <th>Staff ID</th>
            </tr>
        </thead>
     <tbody>
            <tr>
                <td><?php echo$row['ID'];?></td>
                <td><?php echo$row['NSS'];?></td>
                <td><?php echo$row['ZQ520'];?></td>
                <td><?php echo$row['PO'];?></td>
                <td><?php echo$row['Invoice_No'];?></td>
                <td><?php echo$row['Type_Unit'];?></td>
                <td><?php echo$row['Part_No'];?></td>
                <td><?php echo$row['Warranty'];?></td>
                <td><?php echo$row['Current_State'];?></td>
                <td><?php echo$row['Current_Station'];?></td>
                <td><?php echo$row['Current_Meter_Reader'];?></td>
                <td><?php echo$row['Staff_ID'];?></td>

                
            </tr>
            </div>
        </div>
        
        </table>
        <button type="button" class="backbtn" onclick="history.back();" value="Back">Back</button>





            
    
    <?php
        } 
    }  
    else
    {
        echo "No data!";
    }
    
}