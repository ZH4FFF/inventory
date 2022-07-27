<head>
</head>
<style>
body {
	 background-image: url(" TNB_Sustainability.png");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
 </style>
<body> <h2>Search Form </h2>

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
    $queryGet = "SELECT * FROM data_pda WHERE  Staff ID LIKE '%".$find."%'   ";

    $resultGet = $conn->query($queryGet);
    
    //to execute $queryView query & assign query result to $resultGet $resultGet = $conn->query($queryGet);
    

    if ($resultGet->num_rows > 0) {
        while($row = $resultGet->fetch_assoc()) {
            ?>


    <br>
    <h4 class="search">Search Result For : <?php echo $find?></h4>
    ID: <?php echo $row ['ID']; ?> 
    <br><br>
    <button type="button" class="backbtn" onclick="history.back();" value="Back">Back</button>

    <?php
        } 
    }  
    else
    {
        echo "No data!";
    }
}
  