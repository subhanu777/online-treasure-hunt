<?php
session_start(); 
$username = $userErr = $passErr = $password =$userPassErr="";
//$password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

if (empty($_POST["username"])) {
    $userErr = "Username is required";
  } else {
    $username = $_POST["username"];
  }

if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = $_POST["password"];
  }






//connect to mysql and check password and username;
//iflogin successfull redirect to question
//iflogin not successfull remain on same page


$servername = "localhost";
$user= "root";
$pass = "root";
$dbName = "debug";

// Create connection
$conn = new mysqli($servername, $user, $pass,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT  * FROM auth where username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //}
		$row = $result->fetch_assoc();
	
	 $_SESSION["user"] = $username;
	 $_SESSION["pass"] = $password;
	 $_SESSION["teamName"] =$row["t_name"];
	ob_start();
    header('Location:question.php');
    ob_end_flush();
    die();
	
} else {
    
	$userPassErr = "Username or Password is Incorrect";
	
	}
$conn->close();







}

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Log in Page- EngQuest 2019</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="image1.png">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br/><br/><br/><br/><br/><br/>
<fieldset>
<legend><font><b><center><font style="Lucida Handwriting"><font color="white"><font size="16">EngQuest 2019 Log In</center></b></font></legend>
<br/><br/><br/>
<font>
<b><font color="white"><font size="16">
Username : <input type="text" name = "username"><br/><br/>
Password : <input type="password" name = "password"><br/><br/>
<span><b> <?php echo $userPassErr ?></b></span>
<span><b> <?php echo $userErr ?></b></span><br/>
<span><b> <?php echo $passErr ?></b></span>
</b>
</font>
</fieldset>
</form>
<br/><br/><br/>
<font>
<div class="container">
<button class="btn btn1" style ="margin-left:48px"><font size="16"><b>Log In</b></button>
</font>
</div>
</body>
</html>