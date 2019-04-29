<?php
session_start();
 
if(!$_SESSION['user'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
	
} 



$e = $_POST["ee"];
$t1 = $_POST["tt1"];
$t2 = $_POST["tt2"];
$t3 = $_POST["tt3"];
$t4 = $_POST["tt4"];
$t5 = $_POST["tt5"];
$t6 = $_POST["tt6"];
$t7 = $_POST["tt7"];
$t8 = $_POST["tt8"];
$t9 = $_POST["tt9"];
$t10 = $_POST["tt10"];
 

 //echo $_POST["e"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "debug";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//	if(if($_SERVER["REQUEST_METHOD"] == "POST") {
		
	
	
	
	$username=$_SESSION['user'];
	
	
	$sql="INSERT INTO record (username,score,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10) 
	VALUES ('$username',".$e.",".$t1.",".$t2.",".$t3.",".$t4.",".$t5.",".$t6.",".$t7.",".$t8.",".$t9.",".$t10.")";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	session_destroy();  
	//header("Location: index.php");
	
	//}


?>