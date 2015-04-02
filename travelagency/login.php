<html>
<body>
<?php
//include("header.php");
session_start();
include 'config.php';
$email=$_POST['user']; 
$pass=$_POST['pass'];

$sql = "SELECT id,name FROM register WHERE password='$pass' and email='$email'";
$result = mysql_query($sql);
$value = mysql_fetch_object($result);
$val=$value->id;
$_SESSION['id'] = $val;
$_SESSION['name'] = $value->name;
$sql="SELECT id FROM register WHERE password='$pass' and email='$email'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){ 
header("Location:Home.php?id=$val");
}
else 
{
?>
<script>alert("<?php echo 'Wrong username & Password';?>");
window.location= "index.php";</script>
<?php
}
?>
</body>
</html>
