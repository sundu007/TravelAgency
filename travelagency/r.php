
<form name="frm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $uid;?>&bus=<?php echo $bus;?>">
No. of Seats:
<input type="text" name="seat" value="" /><br />
Choice:<select name="choice">
<option value=""></option>
<option value="N">No Choice</option>
<option value="W">Window</option>
</select>
<br />
<input type="submit" name="book" value="Book">


</form>