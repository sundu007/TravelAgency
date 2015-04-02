<?php
session_start();
include("header.php");

if(isset($_SESSION['id']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: HOME ::</title>
</head>
<body >
<div class="container">

<div class="col-md-10">
<table class="table">

     
<!-- end header -->
<?php
require("config.php");
if(isset($_SESSION['id']))
{
$name = $_SESSION['name'];
 ?>
 
 
 
 </td></tr> 
<!-- start leftmenu -->
 
	<!-- <dt>
		<a href=""></a>
	</dt> -->
        	
</tr></table>

<table class="table">
<form method="POST">
	<tr>
			<td>
				  
						<td>
							<b>Search For Bus Services </b>
                                                                                            
                        </td>
						<td>
						</td>
                             
				
			</td>
		<tr>
			<td align="center">
				From Stop :
			</td>
			<td>
            <select name="from" required>
            <option value="0" selected="selected">-Select-</option>
            <option value="Erode">Erode</option>
            <option value="Chennai">Chennai</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Salem">Salem</option></select>
          </td>
          </tr>
          <tr>
                        <td align="center">
				To Stop :
			</td>
			<td>
            <select name="to" required>
            <option value="0" selected="selected">-Select-</option>
            <option value="Erode" >Erode</option>
            <option value="Chennai">Chennai</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Salem">Salem</option></select>
            </td>
		</tr>
                
                <tr>
			<td align="center">
				Journey Date :
			</td>
			<td  >
				<input required type="date"  min="2015-03-20" name="journeyDate" maxlength="10" size="10" value="" id="journeyDate">
                            
			</td>
                                             
		
		</tr>
		 
		 
		<tr>
			<td></td><td>
                           	<input type="submit" class="btn btn-primary btn-lg" name="search" value="Search" onclick="return callfrm(document.getElementById('currentdate').value);" class="html-button">
			
			 	       <input type="submit" class="btn btn-primary btn-lg" name="reset" value="Reset">
				  
                        </td>
                </tr>
		<tr>
			<td>
				<div class="col-md-7" align="center">
					 
				</div>
			</td>
            </tr>  
    </form>
	</table>


<?php
if(isset($_POST['search']))
{
	require('config.php');
	$jd= $_POST['journeyDate'];
	 $from = $_POST['from'];
	 $to = $_POST['to'];
	 if($from==$to)
	 {
	 	echo "Arrival and Destination cannot be same";
	 }
	 else
	 {
	 $query = mysql_query("select * from bus where from_stop ='$from' AND to_stop ='$to' AND journeyDate='$jd'");
	 $c = mysql_num_rows($query);
	if($c>0)
	{
?>
<table class="table">

<tr><td>Bus Name</td><td>From</td><td>To</td><td>Dept Time</td><td>Arrival Time</td><td>Distance</td><td>Fare</td><td>Available</td><td></td></tr>
<?php
while($r1 = mysql_fetch_array($query))
{
	$bus= $r1['id'];
	$bus_name = $r1['bus_name'];
	$from = $r1['from_stop'];
	$to = $r1['to_stop'];
	$dept_time = $r1['dept_time'];
	$arrival_time = $r1['arrival_time'];
	$distance = $r1['distance'];
	$fare = $r1['fare'];
	
	$bust = $bus.'bus';
	$query1 = mysql_query("SELECT * from $bust where status='Available'");
	$c = mysql_num_rows($query1);
?>
<?php
if ($c > 0)
	{
		?>
<tr><td><?php echo $bus_name;?></td><td><?php echo $from;?></td><td><?php echo $to;?></td><td><?php echo $dept_time;?></td><td><?php echo $arrival_time;?></td><td nowrap="nowrap"><?php echo $distance;?></td><td><?php echo $fare; ?></td><td><?php echo $c;?></td><td>

		<a href="res.php?id=<?php echo $uid;?>&bus=<?php echo $bus;?>">Book</a>
		<?php
	}
	?>

<?php
}
}
}
}
?>
</td></tr>
</table>
<?php
}
else
{
	header("Location:index.php");
}
}
else
{
	header("Location:index.php");
}
?>
</body>
</html>