<?php
session_start();
include("header.php");
if(isset($_SESSION['id']))
{
?>
<html>
<head><title>:: Profile ::</title>

<?php

require("config.php");
$uid=$_SESSION['id'];
$sql = mysql_query("select * from register where id = '$uid'");
$r = mysql_fetch_array($sql);

$name = $r['name'];
$dob = $r['dob'];
$adress = $r['address'];
$mobile = $r['mobile'];
$pincode = $r['pin_code'];
$gender = $r['gender'];
$email = $r['email'];
$password = $r['password'];
?>
</head>
<body>
<center>
<h3>PROFILE</h3></center>
<div class="container">
<div class="col-md-10">

<table class="table" >
<form>

<tr><td  align="center" height="5px">
</td></tr>     
<tr><td >
Name:</td><td> <input  class="form-control"  type="text" value="<?php echo $name;?>"  readonly="readonly"></td>
<tr><td>
Address:</td><td> <input  class="form-control" type="text" value="<?php echo $adress;?>"  readonly="readonly"></td></tr>
<tr><td>
Pin code:</td><td> <input  class="form-control" type="text" value="<?php echo $pincode; ?>"  readonly="readonly"></td></tr>
<tr><td>
DOB:</td><td> <input  class="form-control" type="text" value="<?php echo $dob;?>"  readonly="readonly"></td></tr>
<tr><td>
Gender:</td><td> <input class="form-control"  type="text" value="<?php echo $gender; ?>"  readonly="readonly"></td></tr>
<tr><td>
Mobile No:</td><td> <input  class="form-control" type="text" value="<?php echo $mobile; ?>"  readonly="readonly"></td></tr>
<tr><td>
Email: </td><td><input  class="form-control"  type="text" value="<?php echo $email; ?>"  readonly="readonly"></td></tr>
<tr><td>
Password:</td><td> <input type="text"  class="form-control" value="<?php echo $password; ?>"  readonly="readonly"></td>
</tr>
<tr>
<td></td>
<td align="center">
<button class="btn btn-primary btn-lg"><a href="profile-update.php?id=<?php echo $uid; ?>">Edit</a></button>
<button class="btn btn-primary btn-lg"><a href="Home.php?id=<?php echo $uid; ?>">Back</a></button>
</td>
</tr>
</form>
</table>

<?php
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</div>
</body>
</html>