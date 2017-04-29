<?php
session_start();
if (isset($_SESSION['myusername']) && isset($_SESSION['mypassword'])){

header("location:cart.php");

}

else{
echo "Incorrect username or password";
header("location:login.php");
}