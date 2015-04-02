
<?php
session_start();
include("header.php");

if(isset($_SESSION['id']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
a{cursor:default;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>:: Password Change ::</title>
</head>

<body >
<center>
<h3>CHANGE PASSWORD</h3></center>

<table align="center">
  <tr><td height="124"><marquee onmouseover="this.stop();" onmouseout="this.start();" draggable="auto" bgcolor="#663333" loop="-1" dropzone="move" direction="left" behavior="alternate" scrollamount="2" scrolldelay="1">
     <img border="1" height="80" width="120" src="images/B1.jpg" />
     <img height="80" width="120" src="images/B2.jpg" />
     <img height="80" width="120" src="images/B3.jpg" />
     <img height="80" width="120" src="images/B4.jpg" />
     <img height="80" width="120" src="images/B5.jpg" />
     <img height="80" width="120" src="images/B6.jpg" />
     <img height="80" width="120" src="images/7.png" />
     <img height="80" width="120" src="images/v (1).jpg" />
     <img height="80" width="120" src="images/v (2).jpg" />
     <img height="80" width="120" src="images/v (3).jpg" />
     <img height="80" width="120" src="images/v (4).jpg" />
     <img height="80" width="120" src="images/v (5).jpg" />
     <img height="80" width="120" src="images/v (6).jpg" />
     <img border="1" height="80" width="120" src="images/v (7).jpg" />
     
     </marquee></td></tr>
     </table>

     <div class="container">

<div align="center" class="col-md-9">

<table class="table" align="center">
  <form method="post">
  <tr>
  <td align="center">

Old Password:<font>*</font></td>
<td>     
<input  class="form-control"  type="password" name="oldp" value="" /></td>
</tr>
<tr><td align="center">New Password:<font >*</font></td><td> <input class="form-control" type="password" name="newp" value="" /></td></tr>
<tr>
<td align="center">Confirm Password:<font >*</font> </td><td><input  class="form-control" type="password" name="conp" value="" /></td></tr>
<?php
require("config.php");
$msg = "";
$uid=$_SESSION['id'];

$sql = mysql_query("select * from register where id = '$uid'");
$r = mysql_fetch_array($sql);
$password = $r['password'];

if(isset($_POST['s'])){
	$oldp = $_POST['oldp'];
	$newp = $_POST['newp'];
	$conp = $_POST['conp'];
	
 	if($oldp=='' || $oldp=='' || $newp==''){

$msg = "Please enter all the fields";
$type = "danger";
}
	else if($oldp!=$password){
			$msg = "Old password is incorrect";
			$type = "danger";
			}
	
	else if($newp != $conp){
		$msg = "New password does not match with confirm password.";
			$type = "danger";
		}
		
else{
	$sql = mysql_query("update register set password='$newp' where id='$uid' AND password='$oldp'");
	$msg = "Password updated successfully";
	//header('location:Home.php?id=$uid');
	$type = "success";
	}
?>
	<div class="alert alert-<?php echo $type;?>" role="alert">
        <strong><?php echo $msg; ?>
      </div>
<?php

}

?>
<hr />
<tr>
<td></td><td>
<input type="submit" class="btn btn-primary btn-lg " name="s" value="SUBMIT" />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-primary btn-lg"><a href="Home.php?id=<?php echo $uid;?>"> Back&nbsp;</a></button> 
 </td>
 </tr>

 
 </form></table></td></tr>
</table>
</div>

<?php
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
