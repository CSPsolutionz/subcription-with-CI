<?php

session_start();

if ($_POST['Continue'] != "") {
	
	
$_SESSION["sub_cat"]=$_POST['sub_cat'];

$_SESSION["pname"]=$_POST['pname'];


header('Location: signup3.php');
}

?>