<?php
$query = $this->db->get('allowed'); 
$row = $query->row_array();

$r = $row;{

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multiple Image Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

    <link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

<!--Load jquery.min.js file, which store in js folder.-->
<script type='text/javascript' src="http://localhost/CodeIgniter/js/index.js"></script>

</head>

<body>

  <div class="container">
  <h2></h2>
    <div class="row">
      <div class="col-md-12 heroSlider-fixed">
        <div class="overlay">
      </div>
         <!-- Slider -->
        <div class="slider responsive">
          <div>
						<img src="http://localhost/CodeIgniter/image/1.jpg" alt="" id="img-1" name="img-1" onclick="showHint(this.id)" />
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/2.jpg" alt="" id="img-2" name="img-2" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/3.jpg" alt="" id="img-3" name="img-3" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/4.jpg" alt="" id="img-4" name="img-4" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/5.png" alt="" id="img-5" name="img-5" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/6.jpg" alt="" id="img-6" name="img-6" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/7.png" alt="" id="img-7" name="img-7" onclick="showHint(this.id)"/>
					</div>
					<div>
						<img src="http://localhost/CodeIgniter/image/8.jpg" alt="" id="img-8" name="img-8" onclick="showHint(this.id)"/>
					</div>
        </div>
				 <!-- control arrows -->
				<div class="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</div>
				<div class="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</div>
				
      </div>
    </div>
  </div>
<!--<p>Suggestions: <span id="txtHint"></span></p> -->
  <form  method="post" action="http://localhost/CodeIgniter/index.php/pages/process2">



  <table style="margin-left: 20%;" width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <?php if($r['sub_cat']=="true"){ ?>
    <td> <select name="sub_cat" id="txtHint" style="width:100%; height:200px;" multiple>

  <option> </option>
  
</select></td>
   <?php } ?>
  </tr>
 
</table>

  <p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
    
    <script  src="js/index.js"></script>  </p>
  
   <?php if($r['pname']=="true"){ ?>
    <p style="color:red; margin-left: 20%;" id="demo"  ></p>
    <input type="text" name="pname" id="pname" placeholder="Profile Name"  style="width:60%; margin-left: 20%;" required>
  <?php } ?>

<input type="submit" name="Continue" value="Continue" onclick="myFunction1()" style="width:15%; height:40px; margin-left: 65%; margin-top: 25px;">

</form>
<?php } ?>

<script language="JavaScript" type="text/javascript">
function myFunction1() {
    var inpObj1 = document.getElementById("pname");
    
    
    if (!inpObj1.checkValidity()) {
        document.getElementById("demo").innerHTML = "Please enter profile name.";
    } else {
        document.getElementById("demo").innerHTML = "";
    } }





function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?cat_id="+str, true);
  xhttp.send();   
}
</script>


<script type='text/javascript' src="http://localhost/CodeIgniter/js/index.js"></script>
</body>
</html>