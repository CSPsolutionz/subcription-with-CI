<?php

$this->load->library('session');

if ($_POST['Signup'] != "") {


$fname=$_POST['fname'];

$this->session->set_userdata('fname', $fname);
$value=$this->session->userdata('fname');

echo $value; exit;

$lname=$_POST['lname'];

$this->session->set_userdata('lname', $lname);

	


$password=$_POST['password'];
$password=md5($password);
$this->session->set_userdata('password', $password);

$cpassword=$_POST['cpassword'];
$cpassword=md5($cpassword);
$this->session->set_userdata('cpassword', $cpassword);


$phone=$_POST['phone'];
$this->session->set_userdata('phone', $phone);

$city=$_POST['city'];
$this->session->set_userdata('city', $city);

$cat=$_POST['cat'];
$this->session->set_userdata('cat', $cat);

$promo=$_POST['promo'];
$this->session->set_userdata('promo', $promo);

$email=$_POST['email'];
$this->session->set_userdata('email', $email);

$query = $this->db->get_where('basic_info', array('email' => $email));

//$SelSql = "SELECT * FROM `basic_info` where email='".$email."'";

//echo $SelSql;exit;

//$ress = mysqli_query($connection, $SelSql);
//$r = mysqli_fetch_assoc($ress);

$r = $query->row_array();
if(empty($r)){


	
	


if($password==$cpassword and $cat !="0" ){

	header('Location: signup2.php');
}else {
$_SESSION["fmsg1"] = "please select one category";
	header('Location: signup1.php');
}

}else{
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	header('Location: signup1.php');
		exit;
		}
		

}


?>