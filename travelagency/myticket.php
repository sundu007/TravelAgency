<?php
session_start();
include("header.php");

if(isset($_SESSION['id']))
{
	require("config.php");
$uid = $_SESSION['id'];

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Travel Agency ::</title>
</head>

<body >
<table>
<tr><td>
</td></tr>
</table>

<br />
<br />

<?php
$query = mysql_query("select * from user_history where user_id = '$uid'");
if(mysql_num_rows($query)>0)
{
	
?>
<table class="table">

<tr ><td>Bus Name</td><td>From</td><td>To</td><td >Booking Date</td><td >Seat No.</td><td >Dept Time</td><td >Distance</td><td>Fare</td><td>Operations</td></tr>
<tr>&nbsp;</tr>
<?php
while($r = mysql_fetch_array($query))
{
	$id = $r['id'];
	$bus_id = $r['bus_id'];
	$bus_name = $r['bus_name'];
	$from_stop = $r['from_stop'];
	$to_stop = $r['to_stop'];
	//$journey_date = $r['journey_date'];
	$booking_date= $r['booking_date'];
	$seat_no_booked = $r['seat_no_booked'];
	$dept_time = $r['dept_time'];
	$distance = $r['distance'];
	$fare = $r['fare'];
	?>
    <tr>
    <td ><?php echo $bus_name; ?></td>
    <td><?php echo $from_stop; ?></td>
    <td><?php echo $to_stop; ?></td>
   <!--  <td><?php echo $journey_date; ?></td> -->
    <td><?php echo $booking_date; ?></td>
    <td><?php echo $seat_no_booked; ?></td>
    <td><?php echo $dept_time; ?></td>
    <td><?php echo $distance; ?></td>
    <td><?php echo $fare; ?></td>
    <td>
    <form name="f">
    <input type="button" name="cancel" value="Cancel" onclick="clk()" />
    </form>
    </td></tr>
    <?php
}?>
</table>
<?php
}else
{
	?>
    <script>
	alert("You dont have any booking history");
	window.location = "Home.php?id=<?php echo $uid; ?>";
	</script>
<!--    <h2 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">You Dont Have any Booking History</h2>
-->    <?php
}
?>
<a href="Home.php?id=<?php echo $uid;?>">Back to Home</a>
<script>
function clk()
{
	var cancel = confirm("Are You Sure You Want to Cancel the Ticket");
	if(cancel == true)
	{
		window.location = "cancel.php?id=<?php echo $uid; ?>&seat_id=<?php echo $seat_no_booked; ?>&bus_id=<?php echo $bus_id; ?>&did=<?php echo $id;?>";
	}
	
}

</script>
<?php
}
else
{
	header("Location:Home.php?id=$uid");
}
?>
</body>
</html>

