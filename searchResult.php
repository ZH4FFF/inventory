<head>
</head>
<style>
body {
	 background-image: url(" TNB_Sustainability.png");
	}
 </style>
<body> <h2>Search Form </h2>
<p> SEARCH RESULT: </p>

<?php
$find = $_POST['Search'];

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
    $queryGet = "select * from data_pda where Staff ID LIKE '%".$find."%' ";

    $resultGet = $conn->query($queryGet);
    //to execute $queryView query & assign query result to $resultGet $resultGet = $conn->query($queryGet);

    if ($resultGet->num_rows > 0) {
        while($row = $resultGet->fetch_assoc()) {
?>
    
    UserID: <?php echo $row ['UserID']; ?> 
    <br>
    Wish: <?php echo $row ['TC56']; ?> 
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
  