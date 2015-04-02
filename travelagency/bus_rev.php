<?php
include("header.php");
session_start();
if (isset($_SESSION['name']))
{
	?>
<script>
alert("You're already logged in. Please logout to register!");
window.location = "home.php";
</script>
	<?php
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Travel Agency ::</title>

</head>
<body>
<div class="container">
<div class="col-md-10">
<div style="margin-left: 365px;"><h3>Please Fill Your Details Here</h3></div>
<table class="table">
<center>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="f2">
<div >
<tr ><td align="center">Username:</td><td> <input type="text" class="form-control" name="name"  required/></td>
<td >
</td>
</tr>
<tr><td align="center">Gender:</td><td> <p><input type="Radio" name="submit" value="Male" required />
Male <input type="radio" name="submit" value="Female" required />Female</p></td></tr>
<tr><td align="center"> Date of Birth:</td><td>

<select name="day" id="day" ><option value="" selected="selected" required>Day</option>
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
							<select name="month" id="month" ><option value="" required selected="selected">Month</option>
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
							<select name="year" id="year"><option value=""  required selected="selected">Year</option>
								<option value="1910">1910</option>
<option value="1911">1911</option>
<option value="1912">1912</option>
<option value="1913">1913</option>
<option value="1914">1914</option>
<option value="1915">1915</option>
<option value="1916">1916</option>
<option value="1917">1917</option>
<option value="1918">1918</option>
<option value="1919">1919</option>
<option value="1920">1920</option>
<option value="1921">1921</option>
<option value="1922">1922</option>
<option value="1923">1923</option>
<option value="1924">1924</option>
<option value="1925">1925</option>
<option value="1926">1926</option>
<option value="1927">1927</option>
<option value="1928">1928</option>
<option value="1929">1929</option>
<option value="1930">1930</option>
<option value="1931">1931</option>
<option value="1932">1932</option>
<option value="1933">1933</option>
<option value="1934">1934</option>
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
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
<option value="1995">1995</option></select>


</td></tr> <tr ><td align="center" >Mobile No:</td><td> <input class="form-control" required type="number" name="mo" /></td></tr> <tr ><td align="center" >Address:</td><td>  <textarea
name="add"></textarea></td></tr> <tr ><td  align="center">Pin code:</td><td> 
<input class="form-control" type="text" required name="pin" /></td></tr> <tr ><td  align="center">Email:</td><td>
<input class="form-control" type="email"  required name="email" /></td></tr> <tr  ><td align="center">Password:</td><td> 
<input class="form-control" type="password" required name="pass"/></td></tr> 
</div>
<tr><td >
<div style="margin-left:356px;">
<input  class="btn btn-primary btn-lg"  required type="submit" value="SUBMIT" name="s1" /> 
<input  class="btn btn-primary btn-lg"  required type="reset" value="RESET"/>
<button class="btn btn-primary btn-lg"><a href="index.php"> Back&nbsp;</a></button></td></tr>
</div>
</form>
</center>
</table>
</div>
<?php
if(isset($_POST['s1'])){
	$name = $_POST['name'];
	@$gender = $_POST['submit'];
	$x = $_POST['day'];
	$y = $_POST['month'];
	$z = $_POST['year'];
	$dob = $z."-".$y."-".$x;
	$mobile = $_POST['mo'];
	$address = $_POST['add'];
	$pin_code = $_POST['pin'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$date = date('Y-m-d');
	
	$sql = mysql_connect("localhost","root","");
	$re = mysql_select_db('bus_rev');
	
	if($name =='' || $gender =='' || $dob =='' || $mobile =='' || $address =='' || $pin_code =='' || $email =='' || $password =='' || $date =='' ){
	?>
    <script>
	alert('Please fill all the enteries');
	</script>
	<?php
	}
	
	$sql2 = mysql_query("select * from register where email='$email'");
	if(mysql_num_rows($sql2)==0)
	{
	$a = "insert into register(name,gender,dob,mobile,address,pin_code,email,password,reg_date)values('".$name."','".$gender."','".$dob."','".$mobile."','".$address."','".$pin_code."','".$email."','".$password."','".$date."')";
	$c= mysql_query($a);
	
	$id = mysql_insert_id();
	
	$history = $id.'user_history';
	
	//$sql1 = mysql_query("CREATE TABLE $history(`id` INT NOT NULL AUTO_INCREMENT ,`from` VARCHAR( 120 ) NOT NULL ,`to` VARCHAR( 120 ) NOT NULL ,`journey_date` DATE NOT NULL ,`booking_date` DATE NOT NULL ,`seats_booked` INT NOT NULL ,`dept_time` TIME NOT NULL ,`distance` INT NOT NULL ,PRIMARY KEY ( `id` ) ) ENGINE = MYISAM ;");
?>

<script>
	alert( "You are Registered Successfully");
	window.location= "index.php";
</script>
<?php
	}
	
	else
	{
		?>
        <script>
		alert("This email id is already registered");
		</script>
        <?php
		
	}}
?>


</body>
</html>
