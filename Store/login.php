<?php
ob_start();
session_start();

$link = new mysqli("localhost","root", "", "shoppingcart");
$tbl_name = "users";

if(isset($_POST['submit'])){
$myusername = mysqli_real_escape_string($link,$_POST['myusername']);
$mypassword = mysqli_real_escape_string($link,$_POST['mypassword']);

$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($link,$sql);

$count=mysqli_num_rows($result);

if($count==1){
header("location:login_success.php");
}

else{
echo "Sorry, you are not logged in.";
}

} // isset submit

ob_end_flush();
?>

<html>
<head>
<title>
Login 
</title>

<link rel="StyleSheet" type="text/css" href="DestinationsNav.css"/>
<link rel="StyleSheet" type="text/css" href="countries.css"/>
<link rel="StyleSheet" type="text/css" href="style.css"/>

<style>

fieldset { 
    display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
}

body{
		background-image:url('Images/London-Bridge-Wallpaper-Free-Download-1080P.jpg');
	
}

article{
	margin-right:200px;
	overflow:hidden;
}

</style>
</head>
<body>
<div class="container">

<header>
<ul id="ul1">
  <li><a class="active" href="HomePage.html">Home</a></li>
  <li class="dropdown">
    <a href="../AboutUs/TravelGirl.html" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="../AboutUs/CVDinithi.html">Dinithi Wickramaratne</a>
      <a href="../AboutUs/CV-Shehani.html">Shehani Perera</a>
      <a href="../AboutUs/CVAfra.html">Afra Raheem</a>
      <a href="../AboutUs/CV-Sharfa.html">Sharfa Nasser</a>
      <a href="../AboutUs/CV-Thamashi.html">Thamashi Kumarasinghe</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn">Destinations</a>
    <div class="dropdown-content">
      <a href="../Destinations/France.html">France</a>
      <a href="../Destinations/England.html">England</a>
      <a href="../Destinations/Italy.html">Italy</a>
      <a href="../Destinations/Singapore.html">Singapore</a>
      <a href="../Destinations/Malaysia.html">Malaysia</a>
    </div>
  </li>


  <li class="dropdown">
    <a href="#" class="dropbtn">Our store</a>
    <div class="dropdown-content">
      <a href="products1.php">Souvenir</a>
      <a href="products2.php">Books</a>
      <a href="products3.php">Accessories</a>
    </div>
  </li>

  <li><a class="active" href="../ContactUs/ContactUsForm.html">Contact us</a></li>
</ul>

<h1 id = "heading">Capture the Moment</h1>
	
</header>
  
<nav id="navi">
	
	<img src=""style="width:140px;height:270px;">
	
</nav>


<article>

<table width=450 height=450 align="left" >
         <tr>
         <td >
<div id="Sign-Up"> 
 <fieldset style="width:30%">
<table>
<tr>
<td>
<img src = "783670.jpg" style="width:300px;height:270px;">
</td>
<td>
 <legend><FONT FACE="Geneva, Arial" SIZE=6>SIGN IN HERE</legend> 
 <table border="0" > 
 <tr> 
 <form action="" method="post">
<td>Username:</td> 
<td><input type="text" name="myusername"></td>
</tr> 
 
<td>Password:</td> 
<td><input type="password" name="mypassword"></td>
</tr> 

  
 
 
 <tr> 
 <td width = "1000px"><center><input type="submit" name="submit" value="Sign in" ></center></td> 
 <td><input type="button" onclick="location.href='sign_up.php';" value="Not a memeber? " /></td>
 </tr>
 </td>
 </td>
</table>
 </form> 
 </table> 
 </fieldset> 
 </div> 
 
 </td>
 </tr>
 </table>






</article>

<footer>Copyright © Dinithi Wickramaratne</footer>

</div>
</body>
</html>