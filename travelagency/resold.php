<?php
include("header.php");
session_start();
if(isset($_SESSION['id']))
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Travel Agency ::</title>
</head>

<body>
<div class="col-md-7">
<table class="table">
<tr><td>
</td></tr><tr><td>
<h2>

Welcome To Travel Agency</h2></td></tr>

<tr><td>
|| <b><?php echo date("D d-M-Y");?></b> ||</td></tr></table>
<?php
require("config.php");
$uid = $_SESSION['id'];
$bus = $_GET['bus'];
$bust = $bus.'bus';

if(isset($_POST['book']))
{

	$seat = $_POST['seat'];
	$choice = $_POST['choice'];
	$date = date("Y-m-d");
	echo "<br>";
	
	 $query = mysql_query("select * from bus where id ='$bus'");
	$re1 = mysql_fetch_array($query);
		$bus_name = $re1['bus_name'];
		$from = $re1['from_stop'];
		$to = $re1['to_stop'];
		$dept_time = $re1['dept_time'];
		$arrival_time = $re1['arrival_time'];
		$distance = $re1['distance'];
		$fare = $re1['fare'];
	if($choice !='')
	{
		if($choice=='W' && $seat==1)
		{
		 $query2 = "select * from $bust where status='Available' AND state='$choice' limit 0,$seat";
	$p = mysql_query($query2);
	$re = mysql_num_rows($p);
		}
		else
		{
			 $query2 = "select * from $bust where status='Available' limit 0,$seat";
	$p = mysql_query($query2);
	$re = mysql_num_rows($p);
		}
	if($re>=$seat)
	{
		while($r = mysql_fetch_array($p))
		{
			$id = $r['id'];
		 $q3 = mysql_query("update $bust set status ='Booked' where id='$id'");
		 $q4 = mysql_query("insert into user_history(user_id, bus_id,bus_name, from_stop , to_stop, booking_date, seat_no_booked, dept_time, distance, fare) values('".$uid."','".$bus."','".$bus_name."', '".$from."', '".$to."', '".$date."', '".$id."', '".$dept_time."', '".$distance."', '".$fare."')");
		
	}
	?>
        <script>
		alert("Your booking request has been completed")
		window.location = "Home.php?id=<?php echo $uid; ?>";
        </script>
        <?php
		}
	else
	{
		?>
        <script>
		alert("Your required seats are more then available seats");
		</script>
        <?php
	}
	}
}
?>
<form name="frm" method="post">
No. of Seats:
<input type="text" name="seat" value="" /><br />
Choice:<select name="choice">
<option value=""></option>
<option value="N">No Choice</option>
<option value="W">Window</option>
</select>
<br />
<input type="submit" name="book" value="Book" onclick="a()"/>


</form>
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

