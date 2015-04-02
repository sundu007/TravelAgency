<?php
session_start();

include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Travel Agency </title>
<!--<link rel="stylesheet" href="style.css" />-->
<!-- <script type="text/javascript" src="js/Image-Slider-LnR.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Image-Slider-LnR.css"> -->
</head>
<body align="center">
<div class="container">
<div class="col-md-9">
<center>
<h3>WELCOME TO LUXURY VOYAGE</h3></center>
&nbsp;&nbsp;&nbsp;&nbsp;<table class="table">
<form action="login.php" method="post" name="f">
<tr>

<td align="center">Email: </td><td> <input class="form-control" id="user" type="email" required placeholder="Enter your username" name="user" value="" /></td>
</tr>
<tr>
<td align="center">Password: </td>
<td > 
  <input type="password" class="form-control" id="pass"  required placeholder="Enter your password" name="pass"/></td>

</tr>
<tr>
<td></td><td>
<input type="submit" onclick="validate();" value="Login" name="s" class="btn btn-primary btn-lg btn-block" /> &nbsp;&nbsp; 
</td>
</tr>
<tr>
<td></td><td>
<center>
<a href="bus_rev.php">New User</a>
</td>
</tr>
</div>
</form>
</table>
<!-- <div style="position:relative;left:10px;top:2px;right:0px;">
<div class="container">
      <div class="slider_wrapper">
        <ul id="image_slider">
          <li><img src="slide1.jpg"></li>
          <li><img src="slide2.jpg"></li>
          <li><img src="slide3.jpg"></li>
          <li><img src="slide4.jpg"></li>
          <li><img src="slide5.jpg"></li></ul><span class="nvgt" id="prev"></span><span class="nvgt" id="next"></span>
      </div></div></div> -->
</center>
</body>
</html>
