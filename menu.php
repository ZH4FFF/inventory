<?php 
 session_start(); 
  
//check if session exists 
if(isset($_SESSION["UID"])){ 
  
?> 
 
<html> 
<head>  
<title> TNB Inventory system</title> 
<link rel="stylesheet" href="menustyle.css">

<style>
  .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #04AA6D;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

</style>


  


</head>  
<body>  
<br>  

 
<?php 
 if ($_SESSION["UserType"] == "admin") { 
 ?> 
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Add Record</a>
  <a href="#">Edit Record</a>
  <a href="#">Delete Record</a>
  <a href="#">View All Record</a>
  
</div>

<div id="main">
    
<h3> WELCOME, HI <i style="color:red;"><?php echo $_SESSION["UID"];?> </i><h3> 
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu.</p>

</div>
  
<?php 
 } 
 else { 
?> 
<link rel="stylesheet" href="menustyle.css">

<div class="topnav" id="myTopnav">
  <a href="" class="active">Home</a>
  <a href="insert.php">Add Record</a>
  <a href="#contact">Edit Record</a>
  <div class="dropdown">
    <button class="dropbtn">View Records
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view.php">DATA PDA</a>
      <a href="view_prt.php">DATA PRT</a>
      <a href="view_rosak">DATA ROSAK</a>
    </div>
  </div>
  <a href="viewprof.php">About Self</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="main">
<h1> WELCOME TO TNB INVENTORY SYSTEM , <i style="color:red;"><?php echo $_SESSION["UID"];?> </i><h1> 
 <h2>Hello world</h2>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


   
 
<?php 
 } 
?> 


<!-- logout -->
<form align="right" name="form1" method="post" action="practice.html">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
<!-- Logout -->


</body> 
</html> 
<?php 
} 
else 
{ 
 echo "No session exists or session has expired. Please log in again.<br>"; 
 echo "<a href=practice.html> Login </a>"; 
}