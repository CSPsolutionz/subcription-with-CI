<?php

 if(isset($_SESSION['fmsg1'])){ 
 echo $_SESSION['fmsg1'];
 }  
 unset($_SESSION['fmsg1']);

 if(isset($_SESSION['smsg'])){
	echo $_SESSION['smsg'];
  session_destroy();
	}
	unset($_SESSION['smsg']);
	
 if(isset($_SESSION['fmsg'])){ 
 echo $_SESSION['fmsg'];
 } 	
 unset($_SESSION['fmsg']);


$query = $this->db->get('allowed'); 
$row = $query->row_array();

$r = $row;{

 
 

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
<h1>Signup Page</h1>

</head>

<body>
<form method="post" action="http://localhost/CodeIgniter/index.php/pages/process3">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <?php if($r['pname']=="true"){ ?>
    <td><?php if(isset($_SESSION['pname'])){ echo $_SESSION['pname'];} ?></td>
 <?php } ?>
    <?php if($r['city']=="true"){ ?>
    <td><?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['cat']=="true"){ ?>
    <td><?php if(isset($_SESSION['cat'])){ echo $_SESSION['cat'];} ?></td>
 <?php } ?>
    <?php if($r['sub_cat']=="true"){ ?>
    <td><?php if(isset($_SESSION['sub_cat'])){ echo $_SESSION['sub_cat'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['fname']=="true"){ ?>
    <td><?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} ?></td>
 <?php } ?>
    <?php if($r['lname']=="true"){ ?>
    <td><?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['email']=="true"){ ?>
    <td><?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?></td>
 <?php } ?>
    <?php if($r['phone']=="true"){ ?>
    <td><?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} ?></td>
 <?php } ?>
  </tr>
  <tr>
    <?php if($r['promocode']=="true"){ ?>
    <td><?php if(isset($_SESSION['promo'])){ echo $_SESSION['promo'];} ?></td>
     <?php } ?>
    
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><div class="g-recaptcha" data-sitekey="6LdrhVwUAAAAAAh36eH-_4jKoDw1K3XsXEiC3Sjd"></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="checkbox" name="checkbox" id="checkbox" onclick="myFunction();"><label for="checkbox">Checkbox </label>
    By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <!--<input type="submit" id="myBtn"  name="Signup" value="Signup" style="width:50%;" readonly>-->
      <input type="submit" id="myBtn"  name="Signup" value="Signup" disabled></input>
    </div></td>
  </tr>
</table>
</form>
<script>
var a=0;
//document.getElementById("myBtn").disabled = true;
function myFunction() { 
	if (a==0) { document.getElementById("myBtn").disabled = false; a = 1;}
	else {document.getElementById("myBtn").disabled = true; a = 0;}
}


</script>

</body>
</html>