<?php
session_start();
include("header.php");

if(isset($_SESSION['id']))
{
?>

 <html>
<head><title>:: Profile - Update ::</title>
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
<h3>UPDATE PROFILE</h3></center>
<div class="container">
<div class="col-md-10">

<table class="table" align="center">
<form method="POST">    
<tr><td>
Name:</td><td> <input class="form-control" type="text" name="name" value="<?php echo $name;?>" ></td>
<td></td></tr>
<tr><td>
Address:</td><td> <input  class="form-control" type="text" name="address" value="<?php echo $adress;?>" ></td></tr>
<tr><td>
Pin code:</td><td> <input class="form-control" type="text" name="pincode" value="<?php echo $pincode; ?>" ></td></tr>
<tr><td>
DOB:</td><td> <select  name="day" id="day"><option value="" selected="selected">Day</option>
								<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option></select>
							<select name="month" id="month" ><option value="" selected="selected">Month</option>
								<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option></select>
							<select  name="year" id="year" ><option value="" selected="selected">Year</option>
								

<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option></select></td></tr>
<tr><td>
Gender:</td><td> <input  type="radio" name="sex" value="Male">Male <input type="radio" name="sex" value="Female">Female</td></tr>
<tr><td>
Mobile No:</td><td> <input class="form-control" type="text" name="mobile" value="<?php echo $mobile; ?>" ></td></tr>
<tr><td>
Email: </td><td><input class="form-control" type="text" name="email" value="<?php echo $email; ?>" ></td></tr>
<tr><td>
Password:</td><td> <input class="form-control" type="password" name="pass" value="<?php echo $password; ?>" ></td>
</tr>
<tr><td align="center"></td><td>
<input type="submit" class="btn btn-primary btn-lg" value="UPDATE" name="up">
<button class="btn btn-primary btn-lg"><a href="profile.php?id=<?php echo $uid; ?>">Back</a></button></td></tr>


</form>
</table>
</div>


<?php
if(isset($_POST['up']))
{
	$name1 = $_POST['name'];
	$x = $_POST['day'];
	$y = $_POST['month'];
	$z = $_POST['year'];
 	$dob1 = "$z-$y-$x";
	$address1 = $_POST['address'];
	$mobile1 = $_POST['mobile'];
	$pincode1 = $_POST['pincode'];
	@$gender1 = $_POST['sex'];
	$email1 = $_POST['email'];
	$password1 = $_POST['pass'];
	$_SESSION['name'] = $name1;
	$sql = mysql_query("update register set name='$name1', gender='$gender1', dob='$dob1', mobile='$mobile1', address='$address1', pin_code='$pincode1', email='$email1', password='$password1'
where id='$uid'");
?>
<script>
alert("You'r profile is updated successfully");
window.location="profile.php";
</script>
<?php

header("Location:profile.php?id=$uid");
}
?>
<?php
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</body>
</html>
