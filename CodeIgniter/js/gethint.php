<!DOCTYPE html>
<html>
<body>

<?php
require_once ('connect.php');
  $a=$_POST['cat_id']; 

$a=substr($a,4);


if(isset($_POST) & !empty($_POST)) {
	
	
$ReadSql = "SELECT * FROM `cat` where cat='$a'";
$res = mysqli_query($connection, $ReadSql);

echo "<br />";
while ($r = mysqli_fetch_array($res))
{ ?>

<select name="sub_cat" style="width:100%; height:200px; " multiple required>

  <option><?php echo $r['sub_cat_desc']; ?></option>
  
</select>

<?php } ?>

<?php } ?>

</body>
</html>