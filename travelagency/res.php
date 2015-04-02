<?php
session_start();
error_reporting(E_ALL);

if(isset($_SESSION['id']))
{

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
<a class="navbar-brand page-scroll" href="#page-top">LUXERY VOYAGE</a>                    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <?php
                    if (!isset($_SESSION['name']))
                    {
                        ?>

                    <li>
                        <a class="page-scroll" href="bus_rev.php">Register</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="contact.php" >Contact</a>
                    </li> -->
                        <?php
                    }
                    else
                    {
                        ?>
 <li>
                        <a class="page-scroll" href="Home.php?id=<?php echo $uid;?>">Home</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="password_update.php?id=<?php echo $uid;?>">Password</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="profile.php?id=<?php echo $uid;?>">Profile</a>
                    </li>
                    <li>
                            <a class="page-scroll" href="myticket.php?id=<?php echo $uid;?>"> My Tickets </a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="logout.php" >Logout</a>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br><br><br><br>
    <div align="left"><b>WELCOME:  <?php echo $_SESSION['name'];?></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




|| <b><?php echo date("D d-M-Y");?></b> ||
</div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Travel Agency ::</title>
</head>

<body>
<!-- <span class="text-right" align="right"><?php echo date("d-m-y");?></span> -->

<div class="container">
<div class="col-md-10">
<table class="table">
</table>
<?php
require("config.php");
$uid = $_SESSION['id'];
 $bus = $_GET['bus'];
$bust = $bus.'bus';
?>
<?php
if(isset($_POST['book']))
{

	 $seat = $_POST['seat'];
	 $choice = $_POST['choice'];
	 $date = date("Y-m-d");
	echo "<br>";
	if($seat !='')
	{
		if($choice !='')
		{
	
	header("Location:pay.php?id=$uid&bus=$bus&seat=$seat&c=$choice");
	}
	else
	{
		?>
        <script>
		alert("Enter your Choice");
		</script>
        <?php
	}
	}
	else
	{
		?>
        <script>
		alert("Enter Number of seats to be booked");
		</script>
        <?php
	}
	}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $uid;?>&bus=<?php echo $bus;?>">
<table class="table">
<tr>
<td align="right">No. of Seats:</td>
<td><input type="text" name="seat" value="" /></td>
</tr>
<tr>
<td align="right">Choice:</td><td><select name="choice">
<option value=""></option>
<option value="N">No Choice</option>
<option value="W">Window</option>
</select>
</td>
</tr>
<tr><td></td><td><input  class="btn btn-primary btn-lg"  type="submit" name="book" value="Book"></td></tr>


</form>
<?php
}
else
{
	header("Location:index.php");
}
?>
</body>
</html>

