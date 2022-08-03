<!DOCTYPE html>
<html lang="en">
  <head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">



</head>
<body>
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="view.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





  

  <nav class="navbar navbar-inverse">
  <a class="navbar-brand" href="#">
    <img src="logo_view.png" width="200" height="100" class="d-inline-block align-left" alt="">
  </a>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DATA ROSAK</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="menu.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="practice.html"><span class="glyphicon glyphicon-log-in"></span><p style="color:blue;">LOGOUT</p></a></li>
    </ul>
    

  </div>
</nav>





  <style>

.topright {
  background-image: url("logo_view.png");
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
  </style>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiber";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bape banyak data per page
$total_records_per_page = 10;
// End

  // Nak tau page number brape
  if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        // end
        
// Setkan offset untuk next page
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
// End


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "select * from data_rosak LIMIT $offset,$total_records_per_page ";
  $result = $conn->query($sql);
  // End

// Kira total number page
$result_count = mysqli_query(
  $conn,
  "SELECT COUNT(*) As total_records FROM `data_rosak`"
  );
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
  $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1; // total pages minus 1
  // End



?>
<center>
<h2> Search form </h2>
<p> Please search your Serial Number: </p>

<form name="searchRosak.php" action="searchRosak.php" method="POST">

<br>

<input type="text" name="find" size="50" placeholder="Insert StaffID or name only "  required>
<br>
<br>
<input type="submit" name="search" value="Search">

</form>

</center>
<div class="container" style="overflow-x:auto;">
  <div class="row">
  
<table id="example" class="table table-bordered" style="width:100%">
<thead>
            <tr>
                <th>No</th>
                <th>NSS</th>
                <th>State</th>
                <th>Station</th>
                <th>NSS Tag</th>
                <th>Item</th>
                <th>Serial Number Item</th>
                <th>Battery Included</th>
                <th>Damage</th>
                <th>Call Vendor</th>
                <th>Date of report accepted</th>
                <th>Date of vendor take</th>
                <th>Date of vendor return</th>
                <th>Days V</th>
                <th>Days all</th>
                <th>By</th>
                <th>Method</th>
                <th>#SR</th>
                <th>Status</th>
                <th>Remark</th>
            </tr>
        </thead>

<?php
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {
    ?>
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
                <td><?php echo$row['Days All'];?></td>
                <td><?php echo$row['By'];?></td>
                <td><?php echo$row['Method'];?></td>
                <td><?php echo$row['SR#'];?></td>
                <td><?php echo$row['Status'];?></td>
                <td><?php echo$row['Remark'];?></td>


                
            </tr>





            <?php
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        
          

        </div>
        </div>
        </table>
        
        <!-- Button untuk pagination -->
        <ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page  </a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>  Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>> Next </a>
</li>

<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
<!-- End -->
        <button onclick="history.back()">Go Back</button>


        
        
</body>




</html>
  