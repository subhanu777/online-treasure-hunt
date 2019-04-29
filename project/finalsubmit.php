<?php
session_start();

if(!$_SESSION['user'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
} 

// if answer is correct then insert 4 in specified column.of score relation
// if answer is wrong then insert -1 in specified column.of score relation
// if answer is not attempt i.e qi is empty  then insert 0 in specified column.of score relation.

$arr = array('n','c','d','d','a','a','a','c','b','d','b','d','c','b','c','a','c','d','a','a','b','b','c','c','d','a');
//$arrValue =array();
$option = "";
$value = 0;
$total = 0;
$time = "";
$username = $_SESSION['user'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$servername = "localhost";
$user= "root";
$pass = "root";
$dbName = "debug";
if(isset($_POST["timer"]))
{
$time = $_POST["timer"];
$time = date('H:i:s', strtotime($time));
}
echo "Time taken ".$time;
// Create connection
$conn = new mysqli($servername, $user, $pass,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	

for($x = 1;$x<=25;$x++)
{
		
if(empty($_POST["q".$x])) {
    $option = "n";
  } else {
    $option = $_POST["q".$x];
  }
  
 if($option == "n")
{
	$value = 0;
}
else if($arr[$x] == $option)
{
	$value = 4;	
}
else if ($arr[$x]!= $option)
{
		$value = -1;
}

$total= $total +$value;

$arrValue[$x] = $value;

}	
	

}





for($x = 1;$x<=25;$x++)
{
	echo "<br/>your Score <br/>".$arrValue[$x];
}



echo "<br/>".$total;

$sql = "INSERT INTO score 
VALUES ('".$_SESSION['user']."',
".$arrValue[1].",
".$arrValue[2].",
".$arrValue[3].",
".$arrValue[4].",
".$arrValue[5].",
".$arrValue[6].",
".$arrValue[7].",
".$arrValue[8].",
".$arrValue[9].",
".$arrValue[10].",
".$arrValue[11].",
".$arrValue[12].",
".$arrValue[13].",
".$arrValue[14].",
".$arrValue[15].",
".$arrValue[16].",
".$arrValue[17].",
".$arrValue[18].",
".$arrValue[19].",
".$arrValue[20].",
".$arrValue[21].",
".$arrValue[22].",
".$arrValue[23].",
".$arrValue[24].",
".$arrValue[25].",
'".$time."',".$total."
 )";

if ($conn->query($sql) === TRUE) {
    echo "<br/>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




?>