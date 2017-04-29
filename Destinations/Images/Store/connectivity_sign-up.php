<?php 

ob_start();
session_start();

define('DB_HOST', 'localhost'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
define('DB_NAME', 'shoppingcart'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
function NewUser()
 { 
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$password = $_POST['pass'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email']; 
	
$query = "INSERT INTO users (fullname,userName,password,address,mobile,email) VALUES ('$fullname','$userName','$password','$address','$mobile','$email')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
	{ 
	header("location:cart.php"); 
	} 
} 
function SignUp() 
	{ 
	if(!empty($_POST['user'])) 
		//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
		
	{ $query = mysql_query("SELECT * FROM users WHERE userName = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error()); 
	if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser();
	} else { echo "SORRY...YOU ARE ALREADY A REGISTERED USER..."; } 
	header("location:cart.php");} } if(isset($_POST['submit'])) { SignUp(); } 
	
ob_end_flush();
	

	?>

