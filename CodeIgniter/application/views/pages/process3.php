<?php
session_start();
require_once ('connect.php');

if ($_POST['Signup'] != "") {
	
	
$fname=mysql_escape_string($_SESSION["fname"]); 
$lname=mysql_escape_string($_SESSION["lname"]);
$email=mysql_escape_string($_SESSION["email"]);
$phone=mysql_escape_string($_SESSION["phone"]);

$password=mysql_escape_string($_SESSION["password"]);


$city=mysql_escape_string($_SESSION["city"]);
$cat=mysql_escape_string($_SESSION["cat"]);
$sub_cat=mysql_escape_string($_SESSION["sub_cat"]);

$pname=mysql_escape_string($_SESSION["pname"]);
$promo=mysql_escape_string($_SESSION["promo"]);






$sql = "INSERT INTO basic_info (fname, lname, email, phone, city, cat, sub_cat, pname, password, promocode) VALUES ('$fname', '$lname', '$email','$phone','$city','$cat', '$sub_cat', '$pname', '$password', '$promo')";

$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg"] = "Successfully inserted data, Insert New data.";
		
		
		}else{
			$_SESSION["fmsg"] = "Data not inserted, please try again later.";
			
		}

		
		header('location: signup3.php');
		exit;
}


?>